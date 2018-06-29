<script>
    function showsubmenu(id) {
        var i;
        var x = document.getElementsByClassName('submenu');
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            document.getElementById(id).style.display = 'block';
        }
    }

    function hidesub(id) {
        document.getElementById(id).style.display = 'none';
    }
</script>
<div class="navbarheadertop">
    <div>Kor</div>
    <div onclick="location.href='{{url('#')}}'">Sitemap</div>
    <div>Search</div>
</div>
<div>
    <div id="navbarheader" class="navbarheader">
        <div onmouseover="showsubmenu('AboutUs')">About Us</div>
        <div onmouseover="showsubmenu('Product')">Product</div>
        <div onmouseover="showsubmenu('Career')">Career</div>
        <div onmouseover="showsubmenu('PR')">PR</div>
        <div onmouseover="showsubmenu('CSR')">CSR</div>
    </div>
    <div id="navbarheader_sub" class="navbarheader_sub">
        <div id="AboutUs" class="submenu" >
            <div onclick="location.href='{{url('/intro')}}'">
                CEO인사말
            </div>
            <div onclick="location.href='{{url('/company_status')}}'">
                기업현황
            </div>
            <div>
                조직도
            </div>
            <div>
                회사연혁
            </div>
            <div>
                수상실적
            </div>
            <div>
                CI
            </div>
            <div>
                가치체계
            </div>
        </div>
        <div id="Product" class="submenu" style="text-align: center;">
            <div>
                제품소개
            </div>
            <div>
                연구개발(연구소)
            </div>
            <div onclick="location.href='{{url('/productprocess')}}'">
                생산공정
            </div>
            <div onclick="location.href='{{url('/equipment')}}'">
                보유장비
            </div>
            <div>
                인증수상
            </div>
            <div>
                기술보유현황
            </div>
        </div>
        <div id="Career" class="submenu" style="text-align: center; padding-left: 25vw;">
            <div>
                인재상
            </div>
            <div>
                인사제도
            </div>
            <div>
                복리후생
            </div>
            <div>
                채용공고
            </div>
            <div>
                채용절차
            </div>
        </div>
        <div id="PR" class="submenu" style="text-align:right; padding-right:3vw;">
            <div onclick="location.href='{{url('/newsroom')}}'">
                뉴스룸
            </div>
            <div>
                Library
            </div>
            <div>
                FAQ
            </div>
            <div>
                문의상담
            </div>
            <div>
                공지사항
            </div>
        </div>
        <div id="CSR" class="submenu" style="text-align: right;">
            <div>
                나눔경영
            </div>
            <div>
                품질경영
            </div>
            <div>
                윤리경영
            </div>
            <div>
                환경안전보건경영
            </div>
        </div>
    </div>
</div>