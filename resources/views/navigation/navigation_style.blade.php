<style>
    /*********************** Navigation Bar***************************/
    @media (min-width: 576px) {
        .container {
            width: auto;
            max-width:100%;
        }
    }

    @media ( min-width: 1200px ) {
        .container {
            max-width:100%;
        }
    }

    html {
        width: 100%;
        height: 100%;
    }

    body {
        background-color:white;
        margin: 3vw;
        padding: 0;
        height: 100%;
    }

    .navbarheadertop {
        display: flex;
        float: right;
    }
    .ceoheader .header {
        font-size: 1.6vw;
        font-weight: 500;
        color: #000000;
        text-align: left;
    }

    .navbarheadertop > div {
        font-size: 1.1vw;
        font-weight: 700;
        color: #696969;
        margin: 0.5vw 1vw;
        cursor: pointer;
    }

    .navbarheader {
        border-radius: 0.5px;
        width: 100%;
        background: #37326f;
        background: linear-gradient(to right, #37326f, #586699, #37326f);
        display: -ms-flex;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.5vw;
    }

    .navbarheader > div {
        font-size: 1.5vw;
        font-weight: 700;
        color: white;
        background-color: transparent;
        padding: 1.2vh 5vw;
        cursor: pointer;
    }

    .navbarheader_sub {
        width: 100%;
        margin: 0;
        padding: 0;
        line-height: 2.6vw;
    }

    .navbarheader_sub > div {
        width: 100%;
        display: none;
        background-color: #f2e9f2;
    }

    .navbarheader_sub > div > div {

        padding: 0 2vw;
        font-size: 1.1vw;
        font-weight: 700;
        display: inline;
        text-align: center;
        cursor: pointer;
    }

    #wrapper {
        /*position: relative;*/
        min-height: 100%;
        height: 100%;
    }

    /*********************** Navigation Bar***************************/
    .footer {
        background-color: #37326f;
        padding: 2vh 0;
        width: 100%;
        /*position: absolute;*/
        bottom: 0;
        margin-top: 10vh;
    }

    .footer > div {
        font-size: 1vw;
        font-weight: 600;
        color: white;
        background-color: transparent;
        padding: 0.3vh 5vw;
        margin: 1.2vw;
    }

    .footer_child {
        display: -ms-grid;
        display: grid;
        grid-column-gap: 1vw;
        -ms-grid-columns: 1fr 1vw 1fr 1vw 1fr 1vw 1fr 1vw 1fr;
        grid-template-columns: 20% 20% 20% 20% 20%;
        text-align: left;
    }

    .footer_child > div {
        cursor: pointer;
    }

    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }

    .grid-item:nth-child(3) {
        -ms-grid-column: 5;
    }

    .grid-item:nth-child(4) {
        -ms-grid-column: 7;
    }

    .grid-item:nth-child(5) {
        -ms-grid-column: 9;
    }

    .container {
        margin: 2vh 1vw;
        width: auto;
        background-color: #ffffff!important;
    }

    .pagination {
        justify-content: center!important;
        font-size: 2vw!important;
        font-weight:500!important;
        color:black!important;
    }
    .page-item.active .page-link {
        z-index: 1;
        color: #ff0000;
        background-color: white!important;
        border: none!important;
    }
    .page-item.active .page-link:hover{
        background-color:white!important;
        color:#FF0000!important;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative!important;
        float: left!important;
        padding: 6px 12px!important;
        margin-left: -1px!important;
        line-height: 1.42857143!important;
        color: #000000!important;
        text-decoration: none!important;
        background-color: #fff!important;
        border: none!important;
    }
    .page-link:not(:disabled):not(.disabled) :hover{
        cursor: pointer;
        background-color:white!important;
        color:#000000!important;
    }
    .page-link:not(:disabled):not(.disabled){
        cursor: pointer;
        background-color:white!important;
    }
    .page-item:last-child .page-link {
        margin-left: 8vw!important;
        background-color:white!important;
    }

    .page-item:last-child .page-link :hover{
        background-color:white!important;
    }

    .page-item:first-child .page-link{
        margin-right:8vw!important;
        background-color:white!important;
    }

    .page-item:first-child .page-link:hover{
        background-color:white!important;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: #000000;
        cursor: pointer;
        background-color: #ffffff!important;
        border:none!important;
    }
</style>