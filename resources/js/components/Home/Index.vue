<template>
  <div id="wrapper">
    <div class="banner">
      <BallBanner />
      <b-navbar :transparent="true" toggleable="lg" type="dark" id="navbar">
        <b-navbar-brand class="logo" href="#">
          <img id="logo_header" src="images/logo/logo.png" alt="nft-gaming" />
        </b-navbar-brand>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Home</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
              </template>
              <b-dropdown-item href="#">Home 1</b-dropdown-item>
              <b-dropdown-item href="#">Home 2</b-dropdown-item>
              <b-dropdown-item href="#">Home 3</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Explore</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
              </template>
              <b-dropdown-item href="#">Explore Style 1</b-dropdown-item>
              <b-dropdown-item href="#">Explore Style 2</b-dropdown-item>
              <b-dropdown-item href="#">Explore Style 3</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Activity</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
              </template>
              <b-dropdown-item href="#">Activity 1</b-dropdown-item>
              <b-dropdown-item href="#">Activity 2</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Comunity</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
              </template>
              <b-dropdown-item href="#">Blog</b-dropdown-item>
              <b-dropdown-item href="#">Blog Details</b-dropdown-item>
              <b-dropdown-item href="#">Help Center</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Pages</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
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
            <b-nav-item-dropdown href="#" right class="customDropdown" no-caret>
              <template #button-content>
                <span>Contact</span>
                <b-icon
                  class="icon-dropdwon"
                  icon="chevron-down"
                  scale="0.6"
                ></b-icon>
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
          <img :src="icon_search" id="searchIcon" />
        </div>
        <div>
          <div class="wrapper-wallet main">
            <i class="fas fa-wallet"></i>
            <span class="text-wallet">Wallet connect</span>
          </div>
        </div>
        <div>
          <div class="mode_switcher">
            <div id="mode-light">
              <img src="images/icon/sun.png" />
            </div>
            <div id="mode-dark">
              <img src="images/icon/moon.png" />
            </div>
          </div>
        </div>
      </div>
      <div id="theme-banner">
        <div id="content">
          <h2 class="heading">Discover, find,</h2>
          <h1 class="heading mb-style">
            <span class="tf-text style">Sell extraordinary</span>
          </h1>
          <h1 class="heading">Monster NFTs</h1>
          <p class="sub-heading">
            Marketplace for monster character cllections non fungible token NFTs
          </p>
          <div class="group-btn">
            <a href="#" class="wrapper-wallet">
              <i class="fas fa-rocket"></i>
              <span>Explore</span>
            </a>
            <a href="#" class="wrapper-wallet">
              <i class="fas fa-sticky-note"></i>
              <span>Create</span>
            </a>
          </div>
        </div>
        <div id="image">
          <img class="img-bg" src="images/img-bg-sliderhome2.png" />
          <img class="img-human" src="images/imgslider2.png" />
        </div>
      </div>
    </div>
    <div style="min-height: 800px">
      <ContentIndex />
      <TodayPick />
      <PopularCollection />
      <CreateNFTs />
    </div>
    <div>
      <Footer />
    </div>
  </div>
</template>

<script>
import BallBanner from "./BallBanner";
import ContentIndex from "./ContentIndex";
import TodayPick from "./TodayPick";
import PopularCollection from "./PopularCollection";
import CreateNFTs from "./CreateNFTs";
import Footer from "./Footer";
export default {
  name: "App",
  data() {
    return {
      icon_search: "images/icon/searchicon.svg",
    };
  },
  components: {
    BallBanner,
    ContentIndex,
    TodayPick,
    PopularCollection,
    CreateNFTs,
    Footer,
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    onOver() {
      this.visible = true;
    },
    onLeave() {
      this.visible = false;
    },
    handleScroll(event) {
      if (window.pageYOffset >= 500) {
        document.getElementsByClassName("right-nav")[0].style.position =
          "fixed";
        document.getElementsByClassName("navbar")[0].style.position = "fixed";
        document.getElementsByClassName("navbar")[0].style.width = "100%";
        document.getElementsByClassName("navbar")[0].style.zIndex = "100";
        document.getElementsByClassName("navbar")[0].style.animation =
          "move-nav 0.8s";
        document.getElementsByClassName("right-nav")[0].style.animation =
          "move-nav 0.8s";
        document.getElementsByClassName("right-nav")[0].style.zIndex = "100";
        document.getElementsByClassName("mode_switcher")[0].style.display =
          "none";
        document.getElementsByClassName("navbar")[0].style.backgroundImage =
          "linear-gradient(227.3deg,#8A208C 0%,#181B81 100.84%)";
      } else {
        document.getElementsByClassName("navbar")[0].style.position = "static";
        document.getElementsByClassName("right-nav")[0].style.position =
          "absolute";
        document.getElementsByClassName("mode_switcher")[0].style.display = "";
        document.getElementsByClassName("navbar")[0].style.backgroundImage = "";
        document.getElementsByClassName("navbar")[0].style.animation = "";
        document.getElementsByClassName("right-nav")[0].style.animation = "";
      }
    },
  },
};
</script>

<style>
</style>
