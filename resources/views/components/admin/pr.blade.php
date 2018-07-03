<div class="sidebar pr-selector {{ preg_match('/\/admin\/newsroom/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/newsroom.+/', $_SERVER['REQUEST_URI']) ? '' : 'hide'}}">
    <div class="sidemenu">PR</div>
    <div class="sideuser">목록</div>
    <div class="sidesubmenu">
        <ul>
            {{--<li class="liactive"> 사이트정보</li>--}}
            <li class="selector  {{ preg_match('/\/admin\/newsroom.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"><a
                        href="/admin/newsroom/">뉴스룸</a></li>
            {{--<li> 입금계좌</li>--}}
            {{--<li> 사이트정책</li>--}}
        </ul>
    </div>
</div>