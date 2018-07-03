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
</style>