<template>
<div class="footer bg-style">
    <b-row>
        <b-col lg="3" md="12" cols="12">
            <div class="widget widget-logo">
                <div class="logo-footer">
                <a href="#">
                <img id="logo_footer" src="https://themesflat.com/html/axies/assets/images/logo/logo2.png" alt="nft-gaming">
                </a>
                </div>
            <p class="sub-widget-logo">Lorem ipsum dolor sit amet,consectetur adipisicing elit. Quis non, fugit totam vel laboriosam vitae.</p>
            </div>
        </b-col>
        <b-col lg="2" md="4" sm="5" cols="5">
            <div class="widget widget-menu style-1">
            <h5 class="title-widget">My Account</h5>
            <ul>
                <li><a href="#">Authors</a></li>
                <li><a href="#">Collection</a></li>
                <li><a href="#">Author Profile</a></li>
                <li><a href="#">Create Item</a></li>
            </ul>
            </div>
        </b-col>
        <b-col lg="2" md="4" sm="7" cols="5">
            <div class="widget widget-menu style-2">
            <h5 class="title-widget">Resoures</h5>
            <ul>
                <li><a href="#">{{"Help & Support"}}</a></li>
                <li><a href="#">Live Auctions</a></li>
                <li><a href="#">Item Details</a></li>
                <li><a href="#">Activity</a></li>
            </ul>
            </div>
        </b-col>
        <b-col lg="2" md="4" sm="5" cols="5">
            <div class="widget widget-menu style-3">
            <h5 class="title-widget">Company</h5>
            <ul>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            </div>
        </b-col>
        <b-col lg="3" md="6" sm="7" cols="12">
            <div class="widget widget-subcribe">
                <h5 class="title-widget">Subscribe Us</h5>
                <div class="form-subcribe">
                <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                    <input name="email" value="" class="email" type="email" placeholder="info@yourgmail.com" required="">
                    <button id="submit" name="submit" type="submit">
                        <b-icon icon="cursor-fill"/>
                    </button>
                </form>
                </div>
                <div class="widget-social style-1">
                <ul>
                    <li><a href="#"><b-icon icon="twitter"/></a></li>
                    <li><a href="#"><b-icon icon="facebook"/></a></li>
                    <li class="style-2"><a href="#"><b-icon icon="cursor-fill"/></a></li>
                    <li><a href="#"><b-icon icon="youtube"/></a></li>
                    <li class="mgr-none"><a href="#"><b-icon icon="telephone-fill"/></a></li>
                    <li class="mgr-none"><a href="#"><b-icon icon="google"/></a></li>
                </ul>
                </div>
            </div>
        </b-col>
    </b-row>
</div>
</template>

<script>

export default ({
  name: 'Footer'
})
</script>
<style scoped>
.footer{
    padding: 80px 50px;
    background: #fff;
}
.bg-style{
    background-color:#F8F8F8;
}
.footer .widget p {
    font-size: 14px;
    line-height: 22px;
}
.widget-logo .sub-widget-logo {
    padding-right: 35px;
    margin-bottom: 26px;
}
.footer .title-widget {
    font-size: 18px;
    line-height: 26px;
    font-weight: 700;
}
.widget-logo .logo-footer {
    margin-bottom: 13px;
}
.widget-menu .title-widget {
    margin-bottom: 24px;
}
ul {
    list-style: none;
}
ul, ol {
    padding: 0;
}
.widget-menu.style-1 {
    padding-left: 30px;
}
.widget-menu {
    padding-top: 18px;
}
.widget-subcribe {
    padding-top: 17px;
    padding-left: 20px;
}
.widget-menu ul li {
    margin-bottom: 14px;
}
.widget-menu ul li a {
    font-size: 14px;
    line-height: 22px;
    position: relative;
    text-decoration: none;
    color: #1F1F2C;
    transition: all .3s ease-in-out;
    letter-spacing: .1px;
}
.widget-menu ul li a:hover{
    color: #5142FC;
}
.widget-menu ul li a:hover::after{
    visibility: visible;
    opacity: 1;
    width: 100%;
}
.widget-menu ul li a::after {
    content: '';
    width: 0;
    height: 2px;
    position: absolute;
    background: #5142FC;;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    visibility: hidden;
    opacity: 0;
    transition: all .3s ease-in-out;
}
.widget-subcribe .form-subcribe form {
    margin-top: 25px;
    position: relative;
}
.widget-subcribe .form-subcribe input {
    border-radius: 10px;
    background: #f8f8f8;
    width: 100%;
    padding: 13px 50px 12px 22px;
    font-size: 14px;
    border: 1px solid rgba(138,138,160,.3);
}
.widget-social ul {
    margin-top: 20px;
    padding-top:20px;
    display: flex;
}
.widget-subcribe .form-subcribe button {
    height:100%;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    position: absolute;
    top: 0;
    right: 0;
    background-color: #5142FC;
    font-size: 21px;
    padding: 15px 18px 14px 19px;
    color: #fff;
    transition: all .3s ease-in-out;
    display:flex;
    justify-content:center;
    align-items: center;
}
.widget-social.style-1 ul li a {
    text-decoration: none;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    font-size: 21px;
    transition: all .3s ease-in-out;
    letter-spacing: .1px;
}
.widget-social.style-1 a{
    background-color: #ebebeb;
    color: #7a798a;
}
.widget-social.style-1 li :hover{
    background-color: #5142FC;
    color: white;
}
.widget-social.style-1 ul li {
    margin-right: 12px;
}
@media only screen and (max-width: 990px){
.footer{
    padding: 80px 10px;
    overflow: hidden
}
.widget-menu.style-1{
    padding-left: 0px;
}
.widget-subcribe{
    padding-left: 0px;
}
}
@media only screen and (max-width: 1450px){
.widget-social ul {
    flex-wrap: wrap;
}
.widget-social.style-1 ul li {
    margin-bottom: 10px;
}
}
</style>
