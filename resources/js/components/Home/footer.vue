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
                    <li><a href="#"><i class="fab fa-twitter"></i></li>
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
<style>

</style>
