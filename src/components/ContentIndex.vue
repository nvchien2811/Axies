<template>
<div class="wrapper-content">
  <div class="live-auctions">
    <div class="heading-live-auctions">
        <h2 class="tf-title">Live Auctions</h2>
        <a class="exp style2">EXPLORE MORE</a>
    </div>
    <VueSlickCarousel :arrows="true" :dots="true" v-bind="settings_carousel_live" class="full-card">
      <div v-for="item in dataLiveAuctions" :key="item.id" class="slider-item">
        <div class="col-slide">
        <div class="sc-card-product">
          <div class="card-media">
            <img :src= item.image  />
            <button class="wishlist-button heart">
               <b-icon icon="heart" aria-hidden="true"></b-icon>
              <span class="number-like"> {{ item.quantityFavorite }}</span>
            </button>
            <div class="button-place-bid">
              <a href="#" class="sc-button style-place-bid">
                <b-icon class="icon" icon="handbag-fill" aria-hidden="true"></b-icon>
                <span>Place Bid</span>
              </a>
            </div>
          </div>
          <div class="card-title">
            <h5><a>{{"\""+truncate(item.name)+"\""}}</a></h5>
            <div class="tags">{{ item.tags }}</div>
          </div>
          <div class="meta-info">
            <div class="author">
              <div class="avatar">
                <img :src= item.avatarCreator  />
              </div>
              <div class="info">
                <span>Creator</span>
                <h6><a>{{ item.nameCreator }}</a></h6>
              </div>
            </div>
            <div class="price">
              <span>Current Bid</span>
              <h5>{{ item.price +" ETH"}}</h5>
            </div>
          </div>
        </div>
      </div>
      </div>
    </VueSlickCarousel>
  </div>
  <div class="top-seller">
    <div class="heading-live-auctions">
      <h2 class="tf-title">Top Seller</h2>
    </div>
    <VueSlickCarousel :arrows="true" :dots="true" v-bind="settings_carousel_top_seller" class="full-card-seller">
      <div v-for="item in dataTopSeller" :key="item.id" class="slider-item">
        <div class="sc-author-box style-2">
          <div class="author-avatar">
            <img :src= item.avatar class="avatar"/>
            <div class="badge">
              <b-icon scale=2 class="icon-check" icon="check"/>
            </div>
          </div>
          <div class="author-info">
            <h5><a>{{item.name}}</a></h5>
            <span class="price">{{ item.price + " ETH" }}</span>
          </div>
        </div>
      </div>
    </VueSlickCarousel>
  </div>
  <div class="today-pick">
    <div class="heading-live-auctions">
      <h2 class="tf-title">Today's Pick</h2>
      <a class="exp style2">EXPLORE MORE</a>
    </div>
  </div>
</div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
export default {
  name: 'ContentIndex',
  data () {
    return {
      dataLiveAuctions: [
        {
          id: 1,
          name: 'Hamlet Contemplates Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/card-item8.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-11.jpg',
          nameCreator: 'SalvadorDali',
          quantityFavorite: 100,
          price: 4.89,
          tags: 'BSC'
        },
        {
          id: 2,
          name: 'Triumphant Awakening Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/image-box-10.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-12.jpg',
          nameCreator: 'Trista Francis',
          quantityFavorite: 220,
          price: 4.89,
          tags: 'BSC'
        },
        {
          id: 3,
          name: 'Living Vase 01 by Lanza Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/image-box-11.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-13.jpg',
          nameCreator: 'Freddie Carpenter',
          quantityFavorite: 90,
          price: 4.89,
          tags: 'BSC'
        },
        {
          id: 4,
          name: 'Flame Dress by Balmain Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/image-box-21.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-14.jpg',
          nameCreator: 'Tyler Covington',
          quantityFavorite: 145,
          price: 4.89,
          tags: 'BSC'
        },
        {
          id: 5,
          name: 'Hamlet Contemplates Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/card-item8.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-11.jpg',
          nameCreator: 'SalvadorDali',
          quantityFavorite: 100,
          price: 4.89,
          tags: 'BSC'
        },
        {
          id: 6,
          name: 'Triumphant Awakening Contemplates',
          image: 'https://themesflat.com/html/axies/assets/images/box-item/image-box-10.jpg',
          avatarCreator: 'https://themesflat.com/html/axies/assets/images/avatar/avt-12.jpg',
          nameCreator: 'Trista Francis',
          quantityFavorite: 220,
          price: 4.89,
          tags: 'BSC'
        }
      ],
      dataTopSeller: [
        {
          'id': 1,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-1.jpg',
          'name': 'Crispin Berry',
          'price': 214.2
        },
        {
          'id': 2,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-2.jpg',
          'name': 'Samson Frost',
          'price': 205.43
        },
        {
          'id': 3,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-3.jpg',
          'name': 'Tommy Alvarez',
          'price': 170.3
        },
        {
          'id': 4,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-4.jpg',
          'name': 'Windsor Lane',
          'price': 120.7
        },
        {
          'id': 5,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-5.jpg',
          'name': 'Andy Hurlbutt',
          'price': 82.79
        },
        {
          'id': 6,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-6.jpg',
          'name': 'Blake Banks',
          'price': 68.2
        },
        {
          'id': 7,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-7.jpg',
          'name': 'Monica Lucas',
          'price': 52.8
        },
        {
          'id': 8,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-8.jpg',
          'name': 'Matt Ramos',
          'price': 38.4
        },
        {
          'id': 9,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-9.jpg',
          'name': 'Harper Wilcher',
          'price': 29.2
        },
        {
          'id': 10,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-10.jpg',
          'name': 'Crispin Berry',
          'price': 214.2
        },
        {
          'id': 11,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-1.jpg',
          'name': 'Samson Frost',
          'price': 205.43
        },
        {
          'id': 12,
          'avatar': 'https://themesflat.com/html/axies/assets/images/avatar/avt-8.jpg',
          'name': 'Tommy',
          'price': 170.3
        }
      ],
      settings_carousel_live: {
        'dots': true,
        'focusOnSelect': true,
        'infinite': true,
        'speed': 500,
        'slidesToShow': 4,
        'slidesToScroll': 4,
        'touchThreshold': 5,
        'responsive': [
          {
            'breakpoint': 1295,
            'settings': {
              'slidesToShow': 3,
              'slidesToScroll': 3,
              'infinite': true,
              'dots': true
            }
          },
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 2,
              'slidesToScroll': 2,
              'infinite': true,
              'dots': false
            }
          },
          {
            'breakpoint': 600,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'infinite': true,
              'dots': false
            }
          }
        ]
      },
      settings_carousel_top_seller: {
        'dots': false,
        'focusOnSelect': true,
        'infinite': true,
        'speed': 500,
        'slidesToShow': 9,
        'slidesToScroll': 9,
        'touchThreshold': 5,
        'responsive': [
          {
            'breakpoint': 1395,
            'settings': {
              'slidesToShow': 7,
              'slidesToScroll': 7,
              'infinite': true,
              'dots': false
            }
          },
          {
            'breakpoint': 1395,
            'settings': {
              'slidesToShow': 7,
              'slidesToScroll': 7,
              'infinite': true,
              'dots': false
            }
          },
          {
            'breakpoint': 1070,
            'settings': {
              'slidesToShow': 5,
              'slidesToScroll': 5,
              'infinite': true,
              'dots': false
            }
          },
          {
            'breakpoint': 760,
            'settings': {
              'slidesToShow': 4,
              'slidesToScroll': 4,
              'infinite': true,
              'dots': false
            }
          },
          {
            'breakpoint': 640,
            'settings': {
              'slidesToShow': 3,
              'slidesToScroll': 3,
              'infinite': true,
              'dots': false
            }
          }
        ]
      }
    }
  },
  methods: {
    truncate (text) {
      if (text.length > 20) {
        return text.substring(0, 20) + '...'
      } else {
        return text
      }
    }
  },
  components: {
    VueSlickCarousel
  }
}
</script>

<style scoped>
.wrapper-content{
  padding-top: 91px;
  padding-left: 50px;
  padding-right: 50px;
  width: 100%;
}
.live-auctions{
  padding-bottom: 54px;
}
.top-seller{
  padding-bottom: 54px;
}
.full-card-seller{
  cursor: grab;
}
.tf-title {
  position: relative;
  line-height: 44px;
  text-align: center;
  padding-bottom: 14px;
  font-size: 36px;
  font-weight: 700;
}
.heading-live-auctions{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 30px;
}
.heading-live-auctions .exp {
  color: #1F1F2C;
  position: relative;
  font-weight: 700;
  font-size: 14px;
  line-height: 20px;
  letter-spacing: .1em;
  cursor: pointer;
  text-decoration: none;
}
.heading-live-auctions .exp:hover {
  background: linear-gradient(to right,#E250E5,#4B50E6,#E250E5);
  -webkit-text-fill-color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  font-weight: 700;
  background-size: 200% 200%;
  animation: rainbow 2s ease-in-out infinite;
  color: #1F1F2C;
  transition: color .2s ease-in-out;
}
.heading-live-auctions .exp.style2::after {
  background: linear-gradient(216.56deg,#E250E5 5.32%,#4B50E6 94.32%);
}
.heading-live-auctions .exp::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 100%;
  height: 1px;
}
.full-card{
  width: 100%;
}
.col-slide{
  padding:0px;
}
.slider-item{
  transition-property: transform;
  box-sizing: content-box;
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  padding-left: 20px;
}
.sc-card-product{
  width:90%;
  display: flex;
  flex-direction: column;
  padding: 20px;
  background: #fff;
  box-shadow: 0 3px 16px rgb(47 83 109 / 12%);
  border-radius: 20px;
  margin-bottom: 40px;
  overflow: hidden;
  transition: all .3s ease-in-out;
  float: left;
}
.sc-card-product:hover{
  transform: translateY(-10px)
}
.sc-card-product:hover img{
  transform: scale(1.05,1.05)
}
.card-media{
  position: relative;
  margin-bottom: 21px;
  box-sizing: 20px;
  border-radius: 20px;
  overflow: hidden;
}
.sc-card-product:hover .card-media .button-place-bid{
  display : inline;
  animation : move_place_bid 1s;
}
.card-media .button-place-bid {
  position: absolute;
  top: 40%;
  left: 0;
  right: 0;
  text-align: center;
  transition: all .4s ease;
  display:none;
}
.sc-button.style-place-bid {
  display: inline-block;
  background-color: #fff;
  padding: 12px 27px;
  border: 2px solid #fff;
  border-radius: 30px;
  box-sizing: border-box;
  color:black;
  text-decoration: none;
}
.sc-button.style-place-bid:hover{
  background-color: #4B50E6;
  border: 2px solid #4B50E6;
  color:white;
}
.sc-button:hover svg{
  color:white;
}
.sc-button svg {
  color:#4B50E6;
}
.sc-card-product img{
  width: 100%;
}
.card-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}
.tags {
  width: 49px;
  height: 24px;
  line-height: 24px;
  text-align: center;
  font-weight: 700;
  font-size: 12px;
  color: #fff;
  background-color: #5142FC;
  border-radius: 10px;
  letter-spacing: .1em;
  text-transform: uppercase;
}
.slider-item h5 {
  font-size: 18px;
  font-weight: bold;
}
.card-title h5 :hover{
  color: #5142FC;
  cursor: pointer;
}
.meta-info{
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.meta-info .author {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.meta-info .author .avatar {
  width: 44px;
  height: 44px;
  border-radius: 15px;
  overflow: hidden;
  margin-right: 12px;
  flex-shrink: 0;
}
.card-media .wishlist-button {
  position: absolute;
  top: 13px;
  right: 11px;
  font-weight: 700;
  font-size: 14px;
  line-height: 24px;
  color: #fff;
  padding: 2px 11px;
  border-radius: 8px;
  background-color: #14141f;
  cursor: pointer;
  border: none;
}
.top-seller .sc-author-box.style-2 .author-avatar {
  display: flex;
  position: relative;
  margin: 0 0 20px;
  flex-shrink: 0;
  justify-content: center;
}
.top-seller .sc-author-box.style-2 .author-avatar .avatar {
  width: 120px;
  height: 120px;
  border-radius: 40px;
  overflow: hidden;
  margin:10px
}
.top-seller .sc-author-box.style-2 .author-avatar .badge {
  display: inline-block;
  position: absolute;
  object-fit: cover;
  text-align: center;
  background-color: #5142FC;
  padding: 0!important;
  border-radius: 50%;
  width: 26px;
  height: 26px;
  line-height: 27px;
  bottom: 0;
  right: 24px;
}
.icon-check{
  color:white
}
.sc-author-box.style-2 {
  text-align: center;
}
.author-info span {
  font-size: 15px;
  font-weight: 700;
  line-height: 22px;
  color: #7a798a;
  text-align: center;
}
@media only screen and (max-width: 990px){
  .wrapper-content{
    padding-left: 5px;
    padding-right: 5px;
    overflow: hidden
  }
  .col-slide{
    display:flex;
    justify-content: center;
    padding-left: 20px;
  }
  .slider-item{
    padding-left: 0;
  }
  .slick-track{
    background-color:yellow
  }
}
@keyframes move_place_bid {
  0% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px)
  }
  100% {
    -webkit-transform: translateY(0px);
    transform: translateY(0px)
  }
}
@keyframes rainbow {
  0% {
      background-position: left;
  }
  50% {
      background-position: right;
  }
  100% {
      background-position: left;
  }
}
</style>
