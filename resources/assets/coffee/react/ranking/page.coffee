###
#    Copyright 2015-2017 ppy Pty. Ltd.
#
#    This file is part of osu!web. osu!web is distributed with the hope of
#    attracting more community contributions to the core ecosystem of osu!.
#
#    osu!web is free software: you can redistribute it and/or modify
#    it under the terms of the Affero GNU General Public License version 3
#    as published by the Free Software Foundation.
#
#    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
#    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
#    See the GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###

{a, div, span} = React.DOM
el = React.createElement

class Ranking.Page extends React.Component
  constructor: (props) ->
    super props

    @rankingTabs =
      performance:
        title: osu.trans('ranking.type.performance')
      charts:
        title: osu.trans('ranking.type.charts')
        disabled: true
      score:
        title: osu.trans('ranking.type.score')
        disabled: true
      country:
        title: osu.trans('ranking.type.country')
        disabled: true
      kudosu:
        title: osu.trans('ranking.type.kudosu')
        disabled: true

    @state =
      data: props.scores
      page: props.paging.page
      page_size: props.scores.length
      pages: props.paging.pages
      loading: false
      mode: props.mode
      ranking_type: 'performance' # hard coded until other types are implemented


  changePage: (page) =>
    @setState page: page, @retrieve


  generateHash: =>
    if @state.page > 0
      laroute.route 'ranking',
        mode: @state.mode
        type: @state.ranking_type
        page: (@state.page + 1)
    else
      laroute.route 'ranking',
        mode: @state.mode
        type: @state.ranking_type


  updateHash: =>
    newUrl = @generateHash()

    return if newUrl == location.pathname

    history.pushState history.state, null, newUrl


  retrieve: =>
    @setState loading: true, =>
      $.ajax @generateHash(),
        method: 'get'
        dataType: 'json'

      .done (data) =>
        newState =
          data: data.scores
          page: data.paging.page
          pages: data.paging.pages
          loading: false

        @setState newState, ->
          @updateHash()


  setCurrentPlaymode: (_e, {mode}) =>
    return if @state.loading or @state.mode == mode

    @setState mode: mode, page: 0, @retrieve


  switchRankingTab: (_e, {tab}) =>
    return if @state.ranking_type == tab

    @setState ranking_type: tab, @retrieve


  componentDidMount: =>
    $.subscribe 'playmode:set.rankingPage', @setCurrentPlaymode
    $.subscribe 'rankingmode:set.rankingPage', @setCurrentRankingMode
    $.subscribe 'tabs:switch:ranking.rankingPage', @switchRankingTab
    $.subscribe 'tabs:switch:sorting.rankingPage', @switchSortingTab


  componentWillUnmount: =>
    $.unsubscribe '.rankingPage'


  renderRank: (props) =>
    div className: 'ranking-page-table__rank-column',
      "##{@state.page * @state.page_size + props.index + 1}"


  renderUserLink: (props) ->
    a
      href: laroute.route 'users.show', user: props.row.user.id
      className: 'ranking-page-table__user-link'
      span
        className: 'flag-country'
        title: props.row.user.country_code
        style:
          backgroundImage: "url('/images/flags/#{props.row.user.country_code}.png')"
      span
        className: 'ranking-page-table__user-link-text'
        props.row.user.username


  playmodeTabHrefFunc: (mode) =>
    laroute.route 'ranking',
      mode: mode
      type: @state.ranking_type


  rankingTypeTabHrefFunc: (type) =>
    laroute.route 'ranking',
      mode: @state.mode
      type: type


  render: =>
    # override defaults here because setting 'sortable: false' on
    #   the table itself doesn't disable sorting, idk
    ReactTable.ReactTableDefaults.column.sortable = false

    div null,
      div className: 'osu-page',
        el PlaymodeTabs,
          enableAll: true
          currentMode: @state.mode
          hrefFunc: @playmodeTabHrefFunc

        div
          className: 'ranking-page-header'
          div
            className: 'ranking-page-header__container'

            el Tabs,
              name: 'ranking'
              currentTab: @state.ranking_type
              tabs: @rankingTabs
              hrefFunc: @rankingTypeTabHrefFunc

            div className: 'ranking-page-header__title', dangerouslySetInnerHTML:
              __html: osu.trans('ranking.header', type: @rankingTabs[@state.ranking_type].title)

      div className: 'osu-page osu-page--small',
        div className: 'ranking-page-table',
          el ReactTable.default,
              columns: [
                {
                  id: 'rank'
                  header: ''
                  accessor: 'pp_rank'
                  width: 50
                  render: @renderRank
                },
                {
                  id: 'username'
                  header: ''
                  accessor: 'user.username'
                  render: @renderUserLink
                },
                {
                  id: 'hit_accuracy'
                  header: osu.trans('ranking.stat.accuracy')
                  width: 75
                  accessor: (r) ->
                    "#{parseFloat(r.hit_accuracy).toFixed(2)}%"
                },
                {
                  id: 'play_count'
                  header: osu.trans('ranking.stat.play_count')
                  width: 75
                  accessor: (r) ->
                    r.play_count.toLocaleString()
                },
                {
                  id: 'performance',
                  header: osu.trans('ranking.stat.performance')
                  width: 110
                  headerClassName: '-active'
                  accessor: (r) ->
                    "#{Math.round(r.pp).toLocaleString()}pp"
                },
                {
                  id: 'ss_count'
                  header: osu.trans('ranking.stat.ss')
                  width: 50
                  accessor: (r) ->
                    r.grade_counts.ss.toLocaleString()
                },
                {
                  id: 's_count'
                  header: osu.trans('ranking.stat.s')
                  width: 50
                  accessor: (r) ->
                    r.grade_counts.s.toLocaleString()
                },
                {
                  id: 'a_count'
                  header: osu.trans('ranking.stat.a')
                  width: 50
                  accessor: (r) ->
                    r.grade_counts.a.toLocaleString()
                },
              ]
              className: '-highlight'
              manual: true
              showPageJump: false
              resizable: false
              showPageSizeOptions: false
              defaultPageSize: @state.page_size
              data: @state.data
              page: @state.page
              pages: @state.pages
              pageSize: @state.page_size
              loading: @state.loading
              onPageChange: @changePage
              PaginationComponent: Ranking.Paginator
              getTrProps: (state, rowInfo, column) ->
                if !rowInfo.row.user.is_active
                  style:
                    opacity: 0.5
                else
                  {}
