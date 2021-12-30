<template>
<div id="wrapper">
 <div class="banner">
  <BallBanner/>
  <b-navbar :transparent="true" toggleable="lg" type="dark" id="navbar">
    <b-navbar-brand class="logo" href="#">
    <img id="logo_header" src="https://themesflat.com/html/axies/assets/images/logo/logo.png" alt="nft-gaming">
    </b-navbar-brand>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Home</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Home 1</b-dropdown-item>
          <b-dropdown-item href="#">Home 2</b-dropdown-item>
          <b-dropdown-item href="#">Home 3</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Explore</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Explore Style 1</b-dropdown-item>
          <b-dropdown-item href="#">Explore Style 2</b-dropdown-item>
          <b-dropdown-item href="#">Explore Style 3</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Activity</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Activity 1</b-dropdown-item>
          <b-dropdown-item href="#">Activity 2</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Comunity</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Blog</b-dropdown-item>
          <b-dropdown-item href="#">Blog Details</b-dropdown-item>
          <b-dropdown-item href="#">Help Center</b-dropdown-item>
        </b-nav-item-dropdown>
         <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Pages</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Authors</b-dropdown-item>
          <b-dropdown-item href="#">Authors 2</b-dropdown-item>
          <b-dropdown-item href="#">Wallet Connect</b-dropdown-item>
          <b-dropdown-item href="#">Create Item</b-dropdown-item>
          <b-dropdown-item href="#">Edit Profile</b-dropdown-item>
          <b-dropdown-item href="#">Ranking</b-dropdown-item>
          <b-dropdown-item href="#">Login</b-dropdown-item>
          <b-dropdown-item href="#">Sign Up</b-dropdown-item>
          <b-dropdown-item href="#">No Result</b-dropdown-item>
          <b-dropdown-item href="#">FAQ</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown href="#" right class='customDropdown' no-caret>
          <template #button-content>
            <span>Contact</span>
            <b-icon class="icon-dropdwon" icon="chevron-down" scale=0.6></b-icon>
          </template>
          <b-dropdown-item href="#">Contact 1</b-dropdown-item>
          <b-dropdown-item href="#">Contact 2</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
      <!-- Right aligned nav items -->
    </b-collapse>
  </b-navbar>
  <div class="ml-auto right-nav">
      <div>
        <img :src="icon_search" id="searchIcon"/>
      </div>
      <div>
        <div class="wrapper-wallet main">
          <b-icon class="icon-wallet" icon="wallet-fill" scale=1></b-icon>
          <span class="text-wallet">Wallet connect</span>
        </div>
      </div>
      <div>
        <div class="mode_switcher">
          <div id="mode-light">
            <img src="https://themesflat.com/html/axies/assets/images/icon/sun.png"/>
          </div>
          <div id="mode-dark">
            <img src="https://themesflat.com/html/axies/assets/images/icon/moon.png"/>
          </div>
        </div>
      </div>
  </div>
  <div id="theme-banner">
    <div id="content">
      <h2 class="heading">Discover, find,</h2>
      <h1 class="heading mb-style"><span class="tf-text style">Sell extraordinary</span></h1>
      <h1 class="heading">Monster NFTs</h1>
      <p class="sub-heading">Marketplace for monster character cllections non fungible token NFTs</p>
      <div class="group-btn">
          <div class="wrapper-wallet">
            <span>Explore</span>
          </div>
          <div class="wrapper-wallet">
            <span>Create</span>
          </div>
      </div>
    </div>
    <div id="image">
      <img class="img-bg" src="https://themesflat.com/html/axies/assets/images/backgroup-secsion/img-bg-sliderhome2.png"/>
      <img class="img-human" src="https://themesflat.com/html/axies/assets/images/box-item/imgslider2.png"/>
    </div>
  </div>
</div>
<div style="min-height:800px">
  <ContentIndex/>
</div>
<div>
  <Footer/>
</div>
</div>
</template>

<script>
import BallBanner from './components/BallBanner'
import ContentIndex from './components/ContentIndex.vue'
import Footer from './components/Footer'
export default {
  name: 'App',
  data () {
    return {
      icon_search: require('./assets/searchicon.svg')
    }
  },
  components: {
    BallBanner,
    ContentIndex,
    Footer
  },
  created () {
    window.addEventListener('scroll', this.handleScroll)
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    onOver () {
      this.visible = true
    },
    onLeave () {
      this.visible = false
    },
    handleScroll (event) {
      if (window.pageYOffset >= 500) {
        document.getElementsByClassName('right-nav')[0].style.position = 'fixed'
        document.getElementsByClassName('navbar')[0].style.position = 'fixed'
        document.getElementsByClassName('navbar')[0].style.width = '100%'
        document.getElementsByClassName('navbar')[0].style.zIndex = '100'
        document.getElementsByClassName('navbar')[0].style.animation = 'move-nav 0.8s'
        document.getElementsByClassName('right-nav')[0].style.animation = 'move-nav 0.8s'
        document.getElementsByClassName('right-nav')[0].style.zIndex = '100'
        document.getElementsByClassName('mode_switcher')[0].style.display = 'none'
        document.getElementsByClassName('navbar')[0].style.backgroundImage = 'linear-gradient(227.3deg,#8A208C 0%,#181B81 100.84%)'
      } else {
        document.getElementsByClassName('navbar')[0].style.position = 'static'
        document.getElementsByClassName('right-nav')[0].style.position = 'absolute'
        document.getElementsByClassName('mode_switcher')[0].style.display = ''
        document.getElementsByClassName('navbar')[0].style.backgroundImage = ''
        document.getElementsByClassName('navbar')[0].style.animation = ''
        document.getElementsByClassName('right-nav')[0].style.animation = ''
      }
    }
  }
}
</script>

<style>
body {
  font-family: urbanist, sans-serif;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
body:not(#_) .customDropdown span{
  color:white;
  font-weight:600;
  font-size:18px;
}
body:not(#_) .customDropdown ul{
  transition: all .3s ease;
}
body:not(#_) .nav-item ul li a{
  font-weight:600;
  font-size:18px;
}
body:not(#_) .nav-item ul li a:hover{
  color:blue;
  background-color:white
}
.banner{
  background-image:linear-gradient(227.3deg,#8A208C 0%,#181B81 100.84%);
  position:relative;
}
#navbar{
  height:80px;
  border-bottom: 1px solid rgba(235,235,235,.2);
  padding-left:50px;
}
.navbar-nav{
  padding-left:20px;
}
#theme-banner{
  position: relative;
  display:flex;
  height:641px;
  opacity: 1;
  padding-left:50px;
  flex-direction:row;
}
.wrapper-wallet{
  display:flex;
  padding:10px 30px 10px 30px;
  border: 2px solid white;
  border-radius: 25px;
  margin-right:40px;
  justify-content:center;
}
.wrapper-wallet.main{
  margin-right:40px
}
.wrapper-wallet>span{
  color:white;
  font-weight:bold;
  font-size:14px
}
.wrapper-wallet:hover{
  background-color:white;
  cursor:pointer;
}
.wrapper-wallet:hover>span{
  color:blue;
  font-weight:bold
}
.wrapper-wallet svg{
  color:white;
  font-weight:bold
}
.wrapper-wallet:hover svg{
  color:blue;
  font-weight:bold
}
.right-nav{
  display:flex;
  position: absolute;
  right:20px;
  top:20px;
  align-items: center;
  flex-direction: row;
}
#searchIcon{
  margin-right:30px;
  cursor:pointer
}
.mode_switcher{
  display:flex;
  flex-direction:row;
  align-items:center;
  z-index: 9;
}
#mode-light{
  display:flex;
  padding:9px;
  border-radius:10px;
  justify-content:center;
  background-image:linear-gradient(216.56deg,#E250E5 5.32%,#4B50E6 94.32%);
  margin-right:10px;
  cursor:pointer
}
#mode-dark{
  display:flex;
  padding:12px;
  border-radius:10px;
  background-color:#343444;
  justify-content:center;
  cursor:pointer
}
#content{
  position: absolute;
  width:50%;
  margin-top:125px;
  padding-left:20px;
  animation:view-content 1s;
}
.heading{
  color:white;
  font-size:56px;
  font-weight:700;
  display:block;
}
.sub-heading{
  transition-delay: 900ms;
  transform: translateY(0)!important;
  margin-top:29px;
  margin-bottom:44px;
  color:#ebebeb;
  font-weight:400;
  font-size:20px;
  line-height: 30px;
  text-transform: capitalize;
}
.heading>span {
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #fff;
  -webkit-text-fill-color: rgb(0 0 0/0%);
}
.group-btn{
  display:flex;
  flex-direction:row;
}
.logo{
  font-size: 20px;
}
#image{
  position: absolute;
  width: 50%;
  padding-top: 30px;
  text-align:right;
  z-index:1;
  transform: translateX(0px);
  animation: move5 10s infinite linear;
  right:0%;
  top:10%;
}

.img-human{
  position:absolute;
  top: 0%;
  max-width: 100%;
  right: 26%;
  animation: view-image 1s;
}
.img-bg{
  position: absolute;
  z-index: -1;
  max-width: 100%;
  right: 10%;
  animation: view-image 1s;
}
.text-wallet{
  margin-left:10px
}
.icon-dropdwon{
  color: white;
  font-weight:bold
}
@keyframes move-nav{
  0% {
    -webkit-transform: translateY(-100px);
    transform: translateY(-100px);
  }
  100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
  }
}
@keyframes view-content {
  0% {
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }
  100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
  }
}
@keyframes view-image {
    0% {
      -webkit-transform: translateX(200px);
      transform: translateX(200px);
    }
    100% {
      -webkit-transform: translateX(0px);
      transform: translateX(0px);
    }
}
@media only screen and (max-width: 990px){
  .mb-style{
    font-size:40px;
  }
  #image{
    display:none;
  }
  .shape{
    display:none;
  }
  #content{
    width:100%;
  }
  #nav-collapse{
    background-color:white;
    z-index:10
  }
  body:not(#_) .customDropdown{
    border-bottom: 1px solid rgba(138,138,160,.3)
  }
  body:not(#_) .customDropdown span{
    display: inline-block;
    font-size: 16px;
    line-height: 48px;
    padding: 0 15px;
    font-weight: 500;
    color:#1F1F2C
  }
  .icon-dropdwon{
    color:black;
    font-weight: bold;
    position: absolute;
    right:30px;
    top:20px
  }
  .right-nav{
    right:80px
  }
  .mode_switcher{
    position: absolute;
    top:150%;
    right:-50%;
    flex-direction:column;
    animation:appear_icon_wallet 0.5s;
  }
  #mode-light{
    margin-right: 0px;
    margin-bottom: 5px;
  }
}
@media only screen and (max-width: 1270px){
  #navbar{
    padding-left:10px;
  }
  #theme-banner{
    padding-left:0px
  }
  .text-wallet{
    display:none
  }
  .icon-wallet{
    animation:appear_icon_wallet 0.5s
  }
  .wrapper-wallet.main{
    padding:12px;
    margin-right:10px
  }
  .navbar-nav{
    padding-left:0px
  }
}
@keyframes appear_icon_wallet{
  0%{
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
  }
}
@keyframes move5{
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  50% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}
</style>
