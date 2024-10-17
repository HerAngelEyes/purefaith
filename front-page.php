<?php get_header(); // Include the header ?>

<div class="container">
    <h1>Welcome to PureFaithTV</h1>
    <p>This is your custom homepage content. You can add whatever you like here!</p>
    
    <!-- Add any content or features for the homepage -->
Fonts
==============================================*/
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap');
/*================================================
General
================================================*/
body {
    background: var(--dark-color);
    font-family: var(--body-fonts);
    font-size: 1rem;
    font-style: normal;
    font-weight: normal;
    line-height: 2;
    color: var(--secondary-color);
    overflow-x: hidden;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: var(--title-fonts);
    color: var(--white-color);
    font-style: normal;
    text-transform: capitalize;
    font-weight: 600;
    margin: 0;
    letter-spacing: 0.02em;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: inherit;
}

h1 {
    font-size: 40px;
    font-style: normal;
    line-height: 48px;
}

h2 {
    font-size: 36px;
    font-style: normal;
    line-height: 44px;
}

h3 {
    font-size: 32px;
    font-style: normal;
    line-height: 40px;
}

h4 {
    font-size: 28px;
    font-style: normal;
    line-height: 36px;
}

h5 {
    font-size: 24px;
    font-style: normal;
    line-height: 32px;
}

h6 {
    font-size: 20px;
    font-style: normal;
    line-height: 28px;
}
/*================================================
    Header
================================================*/
.animated {
    -webkit-animation-duration: 1.25s;
    animation-duration: 1.25s;
}

.fadeInDown {
    animation-name: fadeInDown
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        transform: none
    }
}

header#gen-header {
    position: relative;
    display: inline-block;
    width: 100%;
    clear: both;
    background: var(--dark-color);
    z-index: 99;
}

header#gen-header.gen-header-sticky {
    position: fixed;
    top: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    -moz-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
}

/*===== Header Top Bar =====*/
header#gen-header .gen-top-header {
    background: var(--dark-color);
    padding: 0;
    font-size: 14px;
}

header#gen-header .gen-top-header .gen-header-contact.text-right ul {
    float: right;
}

header#gen-header .gen-top-header .gen-header-contact ul {
    margin: 0;
    padding: 0;
}

header#gen-header .gen-top-header .gen-header-contact ul li {
    list-style: none;
    display: inline-block;
    color: var(--white-color);
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    padding: 10px 20px;
    float: left;
}

header#gen-header .gen-top-header .gen-header-contact ul li:last-child {
    margin-right: 0;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
}

header#gen-header .gen-top-header .gen-header-contact ul li i {
    margin-right: 10px;
}

header#gen-header .gen-top-header .gen-header-contact ul li a {
    color: var(--white-color);
}

header#gen-header .gen-top-header .gen-header-contact ul li a:hover {
    color: var(--white-color);
    background: transparent;
}

header#gen-header .gen-top-header .text-right .gen-header-social ul,
header#gen-header .gen-top-header .gen-header-social.text-right ul {
    float: right;
}

header#gen-header .gen-top-header .gen-header-social ul {
    margin: 0;
    padding: 0;
}

header#gen-header .gen-top-header .gen-header-social ul li {
    list-style: none;
    display: inline-block;
    float: left;
    border-left: 1px solid rgba(255, 255, 255, 0.1);
}

header#gen-header .gen-top-header .gen-header-social ul li a {
    color: var(--white-color);
    padding: 10px 20px;
    display: inline-block;
}

header#gen-header .gen-top-header ul li a:hover {
    color: var(--white-color);
    background: var(--primary-color)
}

header#gen-header .gen-top-header .gen-header-social ul li:last-child {
    border-right: 1px solid rgba(255, 255, 255, 0.1);
}

/*===== Logo =====*/
header#gen-header .gen-bottom-header .navbar .navbar-brand {
    line-height: 80px;
}

header#gen-header .gen-bottom-header .navbar .navbar-brand img {
    height: 50px;
}

/*===== Header Navbar Bar =====*/
header#gen-header .gen-bottom-header {
    min-height: 90px;
}

header#gen-header .gen-bottom-header .navbar {
    padding: 0;
}

header#gen-header .gen-bottom-header .navbar .gen-menu-contain {
    display: inline-block;
    width: 100%;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav {
    float: right;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li {
    position: relative;
    display: inline-block;
    float: left;
    margin-right: 30px;
    color: var(--white-color);
    line-height: 90px;
    font-weight: 400;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li:last-child {
    margin-right: 0;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li a {
    color: var(--white-color);
    font-family: var(--title-fonts);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li a:focus,
header#gen-header .gen-bottom-header .navbar .navbar-nav li a:hover,
header#gen-header .gen-bottom-header .navbar .navbar-nav li.current-menu-item a,
header#gen-header .gen-bottom-header .navbar .navbar-nav li.current_page_item a,
header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover a,
header#gen-header .gen-bottom-header .navbar .navbar-nav li.current-menu-ancestor a {
    color: var(--primary-color);
}

/*===== Sub Menu Bar =====*/
header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu {
    display: none;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu {
    display: block;
    background: var(--dark-color);
    position: absolute;
    top: 100%;
    left: 0;
    padding-left: 0;
    display: inline-block;
    width: 210px;
    z-index: 999;
    -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    -moz-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li {
    line-height: 2;
    padding: 0;
    margin: 0;
    display: inline-block;
    width: 100%;
    color: var(--white-color);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li i {
    margin-left: 10px;
    font-size: 12px;
    color: var(--white-color);
    opacity: 0.3;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li a {
    line-height: 2;
    text-transform: capitalize;
    padding: 10px 15px;
    display: inline-block;
    width: 100%;
    color: var(--white-color);
    font-size: 14px;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li a:focus,
header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li a:hover,
header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li.current-menu-item>a {
    background: var(--primary-color);
    color: var(--white-color);
}

@media screen and (max-width:4000px) and (min-width:1023px) {
    header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover>.sub-menu {
        display: block !important;
    }
}

/*===== Navigation Sub Menu =====*/
header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li>.sub-menu {
    display: none;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li:hover>.sub-menu {
    position: absolute;
    top: 0;
    right: 100%;
    left: inherit;
    display: block;
    background: var(--dark-color);
    padding-left: 0;
    display: inline-block;
    width: 200px;
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu li.menu-item-has-children>.gen-submenu-icon {
    opacity: 1;
    position: absolute;
    top: 12px;
    right: 15px;
    line-height: 2;
    font-size: 12px;
    color: var(--white-color);
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu>li.menu-item-has-children:hover>.gen-submenu-icon {
    color: var(--white-color);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu>li.menu-item-has-children:hover {
    background: var(--primary-color);
    color: var(--white-color);
}

header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li.menu-item-has-children:hover>a {
    color: var(--white-color);
    transition: all 0s ease-in-out;
    transition: all 0s ease-in-out;
    -moz-transition: all 0s ease-in-out;
    -ms-transition: all 0s ease-in-out;
    -o-transition: all 0s ease-in-out;
    -webkit-transition: all 0s ease-in-out;
}

/*===== Navigation search =====*/
header#gen-header .gen-menu-search-block {
    position: relative;
    margin: 0 30px 0 0;
}

header#gen-header .gen-menu-search-block a {
    color: var(--white-color);
    font-size: 16px;
    width: 18px;
    display: inline-block;
}

header#gen-header .gen-search-form {
    position: absolute;
    top: 59px;
    right: -30px;
    width: 350px;
    padding: 15px;
    z-index: 999;
    display: none;
    background: var(--black-color);
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

header#gen-header .gen-button:hover .gen-button-line-left {
    width: calc(15px - 1px);
}

header#gen-header .gen-search-form .search-field {
    border-color: var(--dark-color);
    background: var(--dark-color);
}

/*===== Header Default =====*/
header#gen-header.gen-header-default .gen-bottom-header.gen-header-sticky {
    position: fixed;
    top: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    -moz-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
    background: var(--dark-color);
}

/*===== Header Style-1 =====*/
header#gen-header.gen-header-style-1.gen-has-sticky {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    background: transparent;
    z-index: 99;
    padding: 0;
    box-shadow: none;
    background: rgba(34, 34, 34, 0.4);
}

header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky {
    position: fixed;
    padding: 0;
    -webkit-box-shadow: 0px 3px 30px 0px rgb(0 33 85 / 10%);
    -moz-box-shadow: 0px 3px 30px 0px rgba(0, 33, 85, 0.1);
    box-shadow: 0px 3px 30px 0px rgb(0 33 85 / 10%);
    background: var(--black-color);
    z-index: 999;
}

header#gen-header.gen-header-style-1 .gen-bottom-header {
    min-height: 70px;
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-brand {
    line-height: 90px;
    background: transparent;
    padding: 0;
    position: relative;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li {
    line-height: 90px;
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li.current-menu-ancestor>a {
    color: var(--primary-color);
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li i {
    color: var(--white-color);
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu {
    top: 100%;
}

header#gen-header.gen-header-style-1 .gen-header-info-box {
    margin: 0 0 0 30px;
    display: flex;
    color: var(--white-color);
    align-items: center;
}

header#gen-header.gen-header-style-1 .gen-header-call {
    display: inline-block;
    float: left;
    margin-right: 30px;
    margin-top: 5px;
}

header#gen-header.gen-header-style-1 .gen-header-call a i {
    font-size: 48px;
    margin-right: 15px;
    line-height: 56px;
}

header#gen-header.gen-header-style-1 .gen-header-call a {
    display: flex;
    align-items: flex-start;
}

header#gen-header.gen-header-style-1 .gen-header-call a .gen-call-info {
    flex: 1;
    text-transform: capitalize;
    font-size: 14px;
    color: var(--dark-color);
}

header#gen-header.gen-header-style-1 .gen-header-call a .gen-call-info span {
    width: 100%;
    float: left;
    display: inline-block;
    color: var(--primary-color);
    line-height: normal;
    font-family: var(--title-fonts);
}

header#gen-header.gen-header-style-1 .gen-header-call a .gen-call-info h5 {
    font-weight: 600;
    line-height: 1;
    font-size: 18px;
    line-height: 26px;
    color: var(--dark-color);
}

header#gen-header.gen-header-style-1 .gen-button {
    background: var(--primary-color);
    padding: 5px 20px;
}

/*==========*/
header#gen-header.gen-header-default .gen-btn-container {
    margin: 0 0 0 30px;
}

header#gen-header.gen-header-default .gen-btn-container .gen-button {
    background: var(--blue-color);
}

header#gen-header.gen-header-default .gen-btn-container .gen-button:hover {
    background: var(--primary-color);
}

header#gen-header.gen-header-default .gen-toggle-btn {
    padding: 0;
    margin: 0 0 0 30px;
}

header#gen-header.gen-header-default .gen-toggle-btn a {
    position: relative;
    display: inline-block;
    padding: 0;
    font-size: 38px;
    background: var(--primary-color);
    color: #fff;
    line-height: 52px;
    width: 52px;
    height: 52px;
    text-align: center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

header#gen-header.gen-header-default .gen-menu-search-block {
    margin: 0 0 0 30px;
}

.gen-account-holder {
    position: relative;
    margin-right: 30px;
    line-height: 90px;
}

.gen-account-holder a#gen-user-btn {
    height: 45px;
    width: 45px;
    line-height: 45px;
    text-align: center;
    background: var(--primary-color);
    color: var(--white-color);
    display: inline-block;
    border-radius: 90px;
}

.gen-account-holder .gen-account-menu {
    position: absolute;
    top: 100%;
    right: 0;
    width: 200px;
    display: none;
    transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
}

.gen-account-holder .gen-account-menu.gen-form-show {
    display: inline-block;
}

.gen-account-holder .gen-account-menu ul {
    margin: 0;
    padding: 0;
    background: var(--dark-color);
}

.gen-account-holder .gen-account-menu ul li {
    list-style: none;
}

.gen-account-holder .gen-account-menu ul li a {
    float: left;
    line-height: 2;
    text-transform: capitalize;
    padding: 10px 15px;
    display: inline-block;
    list-style: none;
    width: 100%;
    color: var(--white-color);
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

.gen-account-holder .gen-account-menu ul li a i {
    margin-right: 8px;
}

.gen-account-holder .gen-account-menu ul li a:hover {
    background: var(--primary-color);
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li.active>a{
    color: var(--primary-color);
}

header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li.active ul li.active>a{
    background-color: var(--primary-color);
    color: var(--white-color);
}


/*===== Header Style-1 =====*/
.admin-bar header#gen-header.gen-header-sticky,
.admin-bar header#gen-header.gen-header-style-1 {
    top: 32px;
}

.admin-bar header#gen-header.gen-header-default .gen-bottom-header.gen-header-sticky {
    top: 32px;
}

@media(max-width:767px) {

    .admin-bar header#gen-header.gen-header-sticky,
    .admin-bar header#gen-header {
        top: 0;
    }

    .admin-bar header#gen-header.gen-header-style-1.gen-header-sticky {
        top: 0;
    }
}

@media only screen and (min-device-width:601px) and (max-device-width:768px) {

    .admin-bar header#gen-header.gen-header-sticky,
    .admin-bar header#gen-header.gen-header-style-1,
    .admin-bar header#gen-header.gen-header-default .gen-bottom-header.gen-header-sticky {
        top: 46px;
    }

    .admin-bar header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky {
        top: 46px !important;
    }
}

@media(max-width:1399px) {
    header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li:hover>.sub-menu {
        left: inherit;
        right: 100%;
    }
}

@media(max-width:1365px) {
    header#gen-header .gen-bottom-header .navbar .navbar-nav li {
        margin-right: 15px;
    }

    header#gen-header .gen-top-header .gen-header-social ul li a {
        font-size: 12px;
        padding: 10px 15px;
    }

    header#gen-header .gen-top-header .gen-header-contact ul li {
        font-size: 12px;
        padding: 10px 15px;
    }

    header#gen-header.gen-header-default .gen-btn-container {
        margin: 0 0 0 15px;
    }

    header#gen-header.gen-header-default .gen-toggle-btn {
        margin: 0 0 0 15px;
    }

    /*===== Header Style-1 =====*/
    header#gen-header.gen-header-style-1 .gen-header-call {
        display: none;
    }

    header#gen-header .gen-menu-search-block {
        position: relative;
        margin: 0 15px 0 0;
    }

    header#gen-header.gen-header-style-1 .gen-header-info-box {
        margin: 0 0 0 15px;
    }

    .gen-account-holder {
        margin-right: 15px;
    }
}

@media(max-width:1023px) {

    /*===== Button Toggler =====*/
    header#gen-header .gen-bottom-header .navbar-toggler {
        font-size: 20px;
        padding: 12px 18px;
        line-height: normal;
        float: right;
        outline: none;
        margin: 0 0 0 15px;
        background: var(--primary-color);
        border: var(--primary-color);
        color: var(--white-color);
        border-radius: 0;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-collapse {
        width: 100%;
        position: absolute;
        left: 0;
        top: 100%;
        background: var(--black-color);
        -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
        -moz-box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
        box-shadow: 0px 5px 15px 0px rgba(0, 33, 85, 0.1);
        max-height: 330px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-brand {
        line-height: 60px;
    }

    header#gen-header .gen-bottom-header {
        min-height: 60px;
    }

    header#gen-header .gen-search-form {
        top: 51px;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav {
        float: left;
        width: 100%;
        display: inline-block;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li {
        float: left;
        width: 100%;
        display: inline-block;
        line-height: normal;
        position: relative;
        font-size: 16px;
        position: relative;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li a {
        width: 100%;
        display: inline-block;
        padding: 15px;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li i {
        margin-left: 0;
        opacity: 1;
        font-size: 12px;
        position: absolute;
        right: 0;
        margin-top: 0;
        top: 0;
        padding: 18px 25px;
        -moz-transform: none;
        -webkit-transform: none;
        -o-transform: none;
        -ms-transform: none;
        transform: none;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu {
        position: relative;
        top: 0;
        left: 0;
        padding-left: 0;
        background: #f5f5f5;
        box-shadow: none;
        display: inline-block;
        width: 100%;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li.menu-item-has-children:hover>a {
        background: var(--primary-color);
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu li.menu-item-has-children>.gen-submenu-icon {
        opacity: 1;
        position: absolute;
        top: 0;
        right: 0;
        line-height: 2;
        font-size: 12px;
        padding: 12px 30px;
        -moz-transform: none;
        -webkit-transform: none;
        -o-transform: none;
        -ms-transform: none;
        transform: none;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li a {
        padding: 10px 30px;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li>a:hover,
    header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover>a {
        background: var(--primary-color);
        color: var(--white-color);
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li.current-menu-ancestor>a {
        background: var(--primary-color);
        color: var(--white-color);
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li.current-menu-ancestor>.gen-submenu-icon,
    header#gen-header .gen-bottom-header .navbar .navbar-nav li:hover>.gen-submenu-icon {
        color: var(--white-color);
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu li:hover>.sub-menu {
        position: relative;
        top: 0;
        left: 0;
        background: transparent;
        display: inline-block;
        width: 100%;
        float: left;
    }

    header#gen-header .gen-bottom-header .navbar .navbar-nav li .sub-menu>li>a {
        background: var(--dark-color);
        color: var(--white-color);
    }

    header#gen-header .gen-top-header .gen-header-contact ul li {
        padding: 10px 10px;
    }

    header#gen-header.gen-header-default .gen-menu-search-block {
        margin-left: auto !important;
    }

    header#gen-header.gen-header-default .gen-toggle-btn {
        display: none;
    }

    /*===== Header Style-1 =====*/
    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-brand {
        line-height: 75px;
    }

    header#gen-header.gen-header-style-1.gen-has-sticky {
        top: 0;
        padding: 0;
        position: relative;
    }

    header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky {
        top: 0;
    }

    .admin-bar header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky {
        top: 32px;
    }

    header#gen-header.gen-header-style-1 .gen-header-call {
        margin-right: 30px;
        display: flex;
    }

    header#gen-header.gen-header-style-1 .gen-header-info-box {
        margin-left: auto;
    }

    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li.current-menu-ancestor>a {
        color: var(--white-color);
    }

    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li {
        line-height: normal;
    }

    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li>a,
    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li {
        color: var(--white-color);
    }

    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li:hover .sub-menu {
        top: 0;
    }

    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li>a:hover,
    header#gen-header.gen-header-style-1 .gen-bottom-header .navbar .navbar-nav li:hover>a {
        color: var(--white-color);
    }

    header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky .gen-bottom-header .navbar .navbar-collapse {
        top: 100%;
    }
}

@media(max-width:767px) {

    header#gen-header.gen-header-style-1 .gen-header-call,
    header#gen-header.gen-header-style-1 .gen-button {
        display: none;
    }

    header#gen-header.gen-header-default .gen-top-header,
    header#gen-header.gen-header-default .gen-btn-container {
        display: none !important;
    }

    .admin-bar header#gen-header.gen-header-style-1.gen-has-sticky.gen-header-sticky,
    .admin-bar header#gen-header.gen-header-default .gen-bottom-header.gen-header-sticky {
        top: 0;
    }

    .gen-account-holder {
        margin-right: 0;
    }
}

@media(max-width:479px) {

    .gen-menu-search-block,
    .gen-sidebar,
    .gen-toggle-btn,
    header#gen-header.gen-header-style-1 .gen-header-info-box {
        display: none !important;
    }
}

@media (max-width:479px){
    header#gen-header .gen-bottom-header .navbar .navbar-brand img{
        height: 45px;
    }
}
/*================================================
Banner
===============================================*/
.gen-banner-movies .owl-carousel .owl-nav {
    top: 50%;
}

.gen-banner-movies .owl-carousel .owl-nav button.owl-prev {
    font-size: 40px;
    left: 2%;
}

.gen-banner-movies .owl-carousel .owl-nav button.owl-next {
    font-size: 40px;
    right: 2%;
}

.gen-banner-movies .owl-carousel .owl-dots {
    position: absolute;
    bottom: 30px;
}

.gen-banner-movies .item {
    position: relative;
    width: 100%;
    height: 100vh;
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
}

.gen-banner-movies .item:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: inline-block;
    background: rgb(34, 31, 31);
    background: -moz-linear-gradient(left, rgba(34,31,31,1) 0%, rgba(34,31,31,0.4) 100%);
    background: -webkit-linear-gradient(left, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    background: linear-gradient(to right, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#221f1f', endColorstr='#66221f1f',GradientType=1 );
}

.gen-banner-movies .gen-movie-contain .gen-tag-line {
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    margin: 0 0 15px 0;
    border-left: 2px solid var(--primary-color);
    padding: 0 0 0 15px;
    color: var(--white-color);
}

.gen-banner-movies .gen-movie-contain .gen-tag-img img {
    width: auto;
    height: 60px;
    margin: 0 0 15px 0;
}

.gen-banner-movies .gen-movie-contain .gen-movie-info h3 {
    font-size: 62px;
    line-height: 70px;
    text-transform: uppercase;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul {
    margin: 5px 0 15px;
    padding: 0;
    display: flex;
    align-items: center;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li {
    list-style: none;
    font-family: var(--title-fonts);
    color: var(--white-color);
    margin: 10px 0 0 20px;
    padding: 0 0 0 20px;
    font-size: 16px;
    line-height: normal;
    display: flex;
    float: left;
    align-items: center;
    position: relative;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li.gen-sen-rating:before {
    display: none;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li.gen-sen-rating span {
    color: var(--white-color);
    border: 1px solid var(--white-color);
    padding: 2px 8px;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li:first-child {
    margin-left: 0;
    padding-left: 0;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li:before {
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    left: -2px;
    height: 4px;
    width: 4px;
    display: inline-block;
    background: var(--white-color);
    opacity: 0.8;
    -webkit-border-radius: 900px;
    -moz-border-radius: 900px;
    border-radius: 900px;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li:first-child:before {
    display: none;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li a {
    color: var(--white-color);
    background: var(--primary-color);
    padding: 2px 8px;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li:last-child {
    margin-right: 0;
    padding-right: 0;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li img {
    height: 25px;
    width: auto;
    margin-right: 10px;
    float: left;
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li i {
    margin-right: 5px;
    color: var(--primary-color);
}

.gen-banner-movies .gen-movie-contain .gen-movie-meta-holder p,
.gen-banner-movies .gen-movie-contain .gen-movie-info p {
    display: inline-block;
    width: 100%;
    font-size: 18px;
}

.gen-banner-movies .gen-movie-contain .gen-movie-action .gen-btn-container {
    display: inline-block;
    margin-right: 30px;
}

.gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-info,
.gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-meta-holder,
.gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-action,
.gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-tag-line,
.gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-tag-img {
    transition: transform .5s, opacity .3s, background .5s;
    opacity: 0;
    transform: translateX(300px);
}

.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-info,
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-meta-holder,
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-action,
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-line,
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-img {
    transform: translateX(0);
    opacity: 1;
}

.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-line,
.gen-banner-movies .gen-movie-contain .gen-tag-img {
    transition-delay: .3s;
}

.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-info {
    transition-delay: .5s;
}

.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-meta-holder {
    transition-delay: .7s;
}

.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-action {
    transition-delay: .9s;
}

/*================*/
.home-singal-silder .gen-banner-movies .item {
    height: 70vh;
    border-left: 3px solid var(--primary-color);
}

@media(max-width:1699px) {
    .gen-movie-contain-style-3 a.playBut {
        margin: 0 0 90px;
    }
}

@media(max-width:1399px) {
    .gen-movie-contain-style-3 a.playBut {
        margin: 0 0 45px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-info h3 {
        font-size: 54px;
        line-height: 62px;
    }
}

@media(max-width:1365px) {
    .gen-banner-movies .owl-carousel .owl-nav button.owl-prev {
        left: 1%;
    }

    .gen-banner-movies .owl-carousel .owl-nav button.owl-next {
        right: 1%;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-info h3 {
        font-size: 62px;
        line-height: 70px;
    }
}

@media(max-width:1023px) {
    .gen-banner-movies .gen-movie-contain .gen-movie-info h3 {
        font-size: 54px;
        line-height: 62px;
    }

    .gen-banner-movies .owl-carousel .owl-nav {
        display: none;
    }
}

@media (max-width:979px) {
    .gen-banner-movies .owl-carousel .owl-dots {
        display: none;
    }
}

@media(max-width:767px) {

    .gen-banner-movies .gen-movie-contain .gen-movie-info h3 {
        font-size: 40px;
        line-height: 48px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-meta-holder p,
    .gen-banner-movies .gen-movie-contain .gen-movie-info p {
        font-size: 16px;
    }

    .gen-banner-movies .gen-movie-contain .gen-tag-line {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 2px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li img {
        height: 22px;
    }

    .gen-banner-movies .gen-movie-contain .gen-tag-img img {
        height: 45px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-action .gen-btn-container {
        margin-right: 10px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-action .gen-btn-container.button-1 .gen-button {
        padding: 12px 30px;
    }

    .gen-banner-movies .gen-movie-contain .gen-movie-meta-holder ul li {
        font-size: 14px;
        margin: 8px 0 0 10px;
        padding: 0 0 0 10px;
    }
}

@media(max-width:479px) {
    .gen-banner-movies .gen-movie-contain .gen-movie-action .gen-btn-container.button-2 {
        margin-top: 15px;
    }
}

/*================================================
Banner 2
===============================================*/
.gen-banner-movies.banner-style-2 .item:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: inline-block;
    background: -moz-linear-gradient(left, rgba(34,31,31,1) 0%, rgba(34,31,31,0.4) 100%);
    background: -webkit-linear-gradient(left, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    background: linear-gradient(to right, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#221f1f', endColorstr='#66221f1f',GradientType=1 );
}

.gen-movie-contain-style-2 .gen-tag-line {
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    margin: 0 0 15px 0;
    border-left: 2px solid var(--primary-color);
    padding: 0 0 0 15px;
    color: var(--white-color);
}

.gen-movie-contain-style-2 .gen-tag-img img {
    width: auto;
    height: 60px;
    margin: 0 0 15px 0;
}

.gen-movie-contain-style-2 .gen-movie-info h3 {
    font-size: 62px;
    line-height: 70px;
    text-transform: uppercase;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title {
    margin: 5px 0 15px;
    padding: 0;
    display: flex;
    align-items: center;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li {
    list-style: none;
    font-family: var(--title-fonts);
    color: var(--white-color);
    margin: 10px 0 0 20px;
    padding: 0 0 0 20px;
    font-size: 16px;
    line-height: normal;
    display: flex;
    float: left;
    align-items: center;
    position: relative;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li.gen-sen-rating:before {
    display: none;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li.gen-sen-rating span {
    color: var(--white-color);
    border: 1px solid var(--white-color);
    padding: 2px 8px;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li:first-child {
    margin-left: 0;
    padding-left: 0;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li:before {
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    left: -2px;
    height: 4px;
    width: 4px;
    display: inline-block;
    background: var(--white-color);
    opacity: 0.8;
    -webkit-border-radius: 900px;
    -moz-border-radius: 900px;
    border-radius: 900px;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li a {
    color: var(--white-color);
    background: #1f80e0;
    padding: 2px 8px;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li:last-child {
    margin-right: 0;
    padding-right: 0;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li img {
    height: 25px;
    width: auto;
    margin-right: 10px;
    float: left;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder ul.gen-meta-after-title li i {
    margin-right: 5px;
    color: var(--primary-color);
}

.gen-movie-contain-style-2 .gen-movie-meta-holder p,
.gen-movie-contain-style-2 .gen-movie-info p {
    display: inline-block;
    width: 100%;
    font-size: 18px;
    margin-bottom: 20px;
}

.gen-movie-contain-style-2 .gen-movie-action .gen-btn-container {
    display: inline-block;
    margin-right: 30px;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder .gen-meta-info ul {
    margin: 0 0 40px;
    padding: 0;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder .gen-meta-info ul li {
    margin: 0 0 5px;
    padding: 0;
    list-style: none;
    font-family: var(--title-fonts);
    color: var(--white-color);
    font-size: 18px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

.gen-movie-contain-style-2 .gen-movie-meta-holder .gen-meta-info ul li strong {
    color: var(--primary-color);
}

.gen-movie-contain-style-2 .gen-movie-meta-holder .gen-meta-info ul li a {
    color: var(--white-color);
}

/* .gen-banner-movies.banner-style-2 .owl-carousel .owl-item .gen-movie-contain-style-2 .gen-movie-info, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item .gen-movie-contain-style-2 .gen-movie-meta-holder, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item .gen-movie-contain-style-2 .gen-movie-action, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item .gen-movie-contain-style-2 .gen-tag-line, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item .gen-movie-contain-style-2 .gen-tag-img {  }
.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-info, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-meta-holder, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-action, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-tag-line, .gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-tag-img { transform: translateX(0); opacity: 1; } */
.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-tag-line,
.gen-banner-movies.banner-style-2 .gen-movie-contain-style-2 .gen-tag-img {
    -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.2s both;
    animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.2s both;
}

.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-info {
    -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.4s both;
    animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.4s both;
}

.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-meta-holder {
    -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.6s both;
    animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.6s both;
}

.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-movie-contain-style-2 .gen-movie-action {
    -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.8s both;
    animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.8s both;
}

.gen-banner-movies.banner-style-2 .owl-carousel .owl-item.active .gen-front-image {
    -webkit-animation: fade-in-left 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1s both;
    animation: fade-in-left 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1s both;
}

/**
 * ----------------------------------------
 * animation fade-in-right
 * ----------------------------------------
 */
@-webkit-keyframes fade-in-right {
    0% {
        -webkit-transform: translateX(50px);
        transform: translateX(50px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes fade-in-right {
    0% {
        -webkit-transform: translateX(50px);
        transform: translateX(50px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }
}

/**
 * ----------------------------------------
 * animation fade-in-left
 * ----------------------------------------
 */
@-webkit-keyframes fade-in-left {
    0% {
        -webkit-transform: translateX(-50px);
        transform: translateX(-50px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes fade-in-left {
    0% {
        -webkit-transform: translateX(-50px);
        transform: translateX(-50px);
        opacity: 0;
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }
}


/*================================================
Banner 3
===============================================*/
.gen-banner-movies.banner-style-3 .item:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: inline-block;
    background: -moz-linear-gradient(left, rgba(34,31,31,1) 0%, rgba(34,31,31,0.4) 100%);
    background: -webkit-linear-gradient(left, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    background: linear-gradient(to right, rgba(34,31,31,1) 0%,rgba(34,31,31,0.4) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#221f1f', endColorstr='#66221f1f',GradientType=1 );
}


.gen-movie-contain-style-3 .row.justify-content-center {
    align-content: flex-end;
    text-align: center;
    padding-bottom: 60px;
}

.gen-movie-contain-style-3 .gen-tag-line {
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    margin: 0 0 15px 0;
    border-left: 2px solid #1f80e0;
    padding: 0 0 0 15px;
    color: var(--white-color);
    display: inline-block;
}

.gen-movie-contain-style-3 .gen-tag-img img {
    width: auto;
    height: 60px;
    margin: 0 auto 15px;
}

.gen-movie-contain-style-3 .gen-movie-info h3 {
    font-size: 62px;
    line-height: 70px;
    text-transform: uppercase;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul {
    margin: 5px 0 15px;
    padding: 0;
    display: flex;
    align-items: center;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    justify-content: center;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li {
    list-style: none;
    font-family: var(--title-fonts);
    color: var(--white-color);
    margin: 10px 0 0 20px;
    padding: 0 0 0 20px;
    font-size: 16px;
    line-height: normal;
    display: flex;
    float: left;
    align-items: center;
    position: relative;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li.gen-sen-rating:before {
    display: none;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li.gen-sen-rating span {
    color: var(--white-color);
    border: 1px solid var(--white-color);
    padding: 2px 8px;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li:first-child {
    margin-left: 0;
    padding-left: 0;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li:before {
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    left: -2px;
    height: 4px;
    width: 4px;
    display: inline-block;
    background: var(--white-color);
    opacity: 0.8;
    -webkit-border-radius: 900px;
    -moz-border-radius: 900px;
    border-radius: 900px;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li:first-child:before {
    display: none;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li a {
    color: var(--white-color);
    background: var(--primary-color);
    padding: 2px 8px;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li:last-child {
    margin-right: 0;
    padding-right: 0;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li img {
    height: 25px;
    width: auto;
    margin-right: 10px;
    float: left;
}

.gen-movie-contain-style-3 .gen-movie-meta-holder ul li i {
    margin-right: 5px;
    color: var(--primary-color);
}

.gen-movie-contain-style-3 .gen-movie-meta-holder p,
.gen-movie-contain-style-3 .gen-movie-info p {
    display: inline-block;
    width: 100%;
    font-size: 18px;
}

.gen-movie-contain-style-3 .gen-movie-action .gen-btn-container {
    display: inline-block;
    margin-right: 30px;
}

/* .gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-info, .gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-meta-holder, .gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-movie-action, .gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-tag-line, .gen-banner-movies .owl-carousel .owl-item .gen-movie-contain .gen-tag-img { transition: transform .5s, opacity .3s, background .5s; opacity: 0; transform: translateX(300px); }
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-info, .gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-meta-holder, .gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-action, .gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-line, .gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-img { transform: translateX(0); opacity: 1; }
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-tag-line, .gen-movie-contain-style-3 .gen-tag-img { transition-delay: .3s; }
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-info { transition-delay: .5s; }
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-meta-holder { transition-delay: .7s; }
.gen-banner-movies .owl-carousel .owl-item.active .gen-movie-contain .gen-movie-action { transition-delay: .9s; } */
.gen-movie-contain-style-3 a.playBut {
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin: 0 0 130px;
}

.gen-movie-contain-style-3 a.playBut svg {
    height: 90px;
    width: auto;
    -webkit-border-radius: 900px;
    -moz-border-radius: 900px;
    border-radius: 900px;
}

.gen-movie-contain-style-3 a.playBut span {
    font-family: var(--title-fonts);
    color: var(--white-color);
    margin: 0 0 0 15px;
    padding: 0;
    font-size: 24px;
    line-height: normal;
    display: flex;
}

.gen-movie-contain-style-3 a.playBut .triangle {
    stroke: var(--white-color);
}

.gen-movie-contain-style-3 a.playBut .circle {
    stroke: var(--white-color);
    stroke-dasharray: 0;
    stroke-dashoffset: 0;
    -webkit-transition: all 0.5s ease-in-out;
    opacity: 1;
}

.gen-movie-contain-style-3 a.playBut:hover .circle {
    opacity: 1;
    stroke-dasharray: 10;
    stroke-dashoffset: 10;
}

@media(max-width:1399px) {
    .gen-movie-contain-style-3 .gen-movie-info h3 {
        font-size: 54px;
        line-height: 62px;
    }
}

@media(max-width:1365px) {
    .gen-movie-contain-style-3 .gen-movie-info h3 {
        font-size: 62px;
        line-height: 70px;
    }
}

@media(max-width:1023px) {
    .gen-movie-contain-style-3 .gen-movie-info h3 {
        font-size: 54px;
        line-height: 62px;
    }

    .gen-movie-contain-style-3 .row.justify-content-center {
        align-content: center;
    }
}

@media(max-width:767px) {
    .gen-movie-contain-style-3 .gen-movie-info h3 {
        font-size: 40px;
        line-height: 48px;
    }

    .gen-movie-contain-style-3 .gen-tag-line {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 2px;
    }

    .gen-movie-contain-style-3 .gen-movie-meta-holder ul li img {
        height: 22px;
    }

    .gen-movie-contain-style-3 .gen-tag-img img {
        height: 45px;
    }

    .gen-movie-contain-style-3 .gen-movie-action .gen-btn-container {
        margin-right: 10px;
    }

    .gen-movie-contain-style-3 .gen-movie-action .gen-btn-container.button-1 .gen-button {
        padding: 12px 30px;
    }

    .gen-movie-contain-style-3 .gen-movie-meta-holder ul li {
        font-size: 14px;
        margin: 8px 0 0 10px;
        padding: 0 0 0 10px;
    }

    .gen-movie-contain-style-3 .gen-movie-meta-holder p,
    .gen-movie-contain-style-3 .gen-movie-info p {
        font-size: 16px;
    }
}

@media(max-width:479px) {
    .gen-movie-contain-style-3 .gen-movie-action .gen-btn-container.button-2 {
        margin-top: 15px;
    }

    .gen-movie-contain-style-3 a.playBut svg {
        height: 60px;
    }

    .gen-movie-contain-style-3 a.playBut span {
        font-size: 18px;
    }

    .gen-movie-contain-style-3 .gen-movie-info h3 {
        font-size: 30px;
        line-height: 38px;
    }
}
/*=========================================
Container
===========================================*/

.container {
    max-width: 1710px;
}

@media (max-width: 1699px) {
    .container {
        max-width: 95%;
    }
}

@media (max-width: 1199px) {
    .container {
        max-width: 960px;
    }
}

@media (max-width: 1023px) {
    .container {
        max-width: 100%;
    }
}

.container-2 {
    max-width: 1300px;
}


/*======Border=======*/

.gen-top-border {
    border-top: 1px solid #141B29;
}
Button Core
================================================*/
input[type="button"],
[type="reset"],
[type="submit"] {
    padding: 12px 30px;
    font-family: var(--title-fonts);
    font-size: 16px;
    background: var(--primary-color);
    color: var(--white-color);
    text-transform: capitalize;
    color: var(--white-color) !important;
    display: inline-block;
    border: none;
    width: auto;
    height: auto;
    line-height: 2;
    text-transform: uppercase;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
}

[type="button"]:hover,
[type="reset"]:hover,
[type="submit"]:hover {
    color: var(--white-color) !important;
}

.gen-button {
    text-transform: uppercase;
    position: relative;
    width: auto;
    font-weight: 400;
    background: var(--primary-color);
    color: var(--white-color);
    font-family: var(--title-fonts);
    font-size: 16px;
    padding: 12px 30px;
    line-height: 2;
    vertical-align: middle;
    border: none;
    display: inline-block;
    overflow: hidden;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.gen-button-flat {
    padding: 5px 30px;
}

.gen-button span {
    z-index: 9;
    position: relative;
}

.gen-button i {
    margin-right: 10px;
}

.gen-button:hover,
.gen-button:focus {
    color: var(--white-color);
    background: var(--primarydark-color);
}

/*===== Button link =====*/
.gen-button.gen-button-link {
    padding: 0;
    background: transparent;
    color: var(--white-color);
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.gen-button.gen-button-link:hover {
    color: var(--white-color);
}

.gen-button.gen-button-link i {
    margin-right: 10px;
    height: 56px;
    width: 56px;
    display: inline-block;
    line-height: 56px;
    background: var(--white-color);
    color: var(--primary-color);
    text-align: center;
    -webkit-border-radius: 900px;
    -moz-border-radius: 900px;
    border-radius: 900px;
    transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
}

.gen-button.gen-button-link:hover i {
    background: var(--primary-color);
    color: var(--white-color);
}

/*===== Button outline =====*/
.gen-button.gen-button-outline {
    background: transparent;
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
}

.gen-button.gen-button-outline:hover {
    color: var(--blue-color);
    border: 1px solid var(--blue-color)
}
/*================================================
Video Popup
================================================*/
.gen-video-icon a {
    position: relative;
    text-decoration: none;
    color: var(--primary-color);
    font-size: 28px;
    width: 90px;
    height: 90px;
    line-height: 90px;
    text-align: center;
    display: inline-block;
    background-color: var(--white-color);
    margin: 0 auto;
    border-radius: 90%;
    -webkit-animation: ripple 1s linear infinite;
    animation: ripple 1s linear infinite;
}

@-webkit-keyframes ripple {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.2), 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.2), 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2), 0 0 0 90px rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2), 0 0 0 90px rgba(255, 255, 255, 0);
    }
}

@keyframes ripple {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.2), 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.2), 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2), 0 0 0 90px rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.2), 0 0 0 30px rgba(255, 255, 255, 0.2), 0 0 0 60px rgba(255, 255, 255, 0.2), 0 0 0 90px rgba(255, 255, 255, 0);
    }
}

.gen-video-icon a.primary {
    -webkit-animation: rippleprimary 1s linear infinite;
    animation: rippleprimary 1s linear infinite;
}

@-webkit-keyframes rippleprimary {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 75, 52, 0.2), 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2);
        box-shadow: 0 0 0 0 rgba(255, 75, 52, 0.2), 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2), 0 0 0 90px rgba(255, 75, 52, 0);
        box-shadow: 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2), 0 0 0 90px rgba(255, 75, 52, 0);
    }
}

@keyframes rippleprimary {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 75, 52, 0.2), 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2);
        box-shadow: 0 0 0 0 rgba(255, 75, 52, 0.2), 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2), 0 0 0 90px rgba(255, 75, 52, 0);
        box-shadow: 0 0 0 10px rgba(255, 75, 52, 0.2), 0 0 0 30px rgba(255, 75, 52, 0.2), 0 0 0 60px rgba(255, 75, 52, 0.2), 0 0 0 90px rgba(255, 75, 52, 0);
    }
}

.gen-video-icon a.blue {
    -webkit-animation: rippleblue 1s linear infinite;
    animation: rippleblue 1s linear infinite;
}

@-webkit-keyframes rippleblue {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(67, 78, 255, 0.2), 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2);
        box-shadow: 0 0 0 0 rgba(67, 78, 255, 0.2), 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2), 0 0 0 90px rgba(67, 78, 255, 0);
        box-shadow: 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2), 0 0 0 90px rgba(67, 78, 255, 0);
    }
}

@keyframes rippleblue {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(67, 78, 255, 0.2), 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2);
        box-shadow: 0 0 0 0 rgba(67, 78, 255, 0.2), 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2);
    }

    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2), 0 0 0 90px rgba(67, 78, 255, 0);
        box-shadow: 0 0 0 10px rgba(67, 78, 255, 0.2), 0 0 0 30px rgba(67, 78, 255, 0.2), 0 0 0 60px rgba(67, 78, 255, 0.2), 0 0 0 90px rgba(67, 78, 255, 0);
    }
}

    
</div>

<?php get_footer(); // Include the footer ?>
