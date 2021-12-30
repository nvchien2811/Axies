<template>
  <div>
    <div class="heading-live-auctions">
      <h2 class="tf-title">Live Auctions</h2>
      <a class="exp style2">EXPLORE MORE</a>
    </div>
    <section>
      <div class="wrapper-content">
      <div class="live-auctions">
        <VueSlickCarousel
          :arrows="true"
          :dots="true"
          v-bind="settings_carousel_live"
          class="full-card"
        >
          <div
            v-for="item in dataLiveAuctions"
            :key="item.id"
            class="slider-item"
          >
            <div class="col-slide">
              <div class="sc-card-product">
                <div class="card-media">
                  <img :src="item.image" />
                  <button class="wishlist-button heart">
                    <b-icon icon="heart" aria-hidden="true"></b-icon>
                    <span class="number-like">
                      {{ item.quantityFavorite }}</span
                    >
                  </button>
                  <div class="button-place-bid">
                    <a href="#" class="sc-button style-place-bid">
                      <b-icon
                        class="icon"
                        icon="handbag-fill"
                        aria-hidden="true"
                      ></b-icon>
                      <span>Place Bid</span>
                    </a>
                  </div>
                </div>
                <div class="card-title">
                  <h5>
                    <a>{{ '"' + truncate(item.name) + '"' }}</a>
                  </h5>
                  <div class="tags">{{ item.tags }}</div>
                </div>
                <div class="meta-info">
                  <div class="author">
                    <div class="avatar">
                      <img :src="item.avatarCreator" />
                    </div>
                    <div class="info">
                      <span>Creator</span>
                      <h6>
                        <a>{{ item.nameCreator }}</a>
                      </h6>
                    </div>
                  </div>
                  <div class="price">
                    <span>Current Bid</span>
                    <h5>{{ item.price + " ETH" }}</h5>
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
        <VueSlickCarousel
          :arrows="true"
          :dots="true"
          v-bind="settings_carousel_top_seller"
          class="full-card-seller"
        >
          <div v-for="item in dataTopSeller" :key="item.id" class="slider-item">
            <div class="sc-author-box style-2">
              <div class="author-avatar">
                <img :src="item.avatar" class="avatar" />
                <div class="badge">
                  <b-icon scale="2" class="icon-check" icon="check" />
                </div>
              </div>
              <div class="author-info">
                <h5>
                  <a>{{ item.name }}</a>
                </h5>
                <span class="price">{{ item.price + " ETH" }}</span>
              </div>
            </div>
          </div>
        </VueSlickCarousel>
      </div>
    </div>
    </section>
  </div>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";
export default {
  name: "ContentIndex",
  data() {
    return {
      dataLiveAuctions: [
        {
          id: 1,
          name: "Hamlet Contemplates Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/card-item8.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-11.jpg",
          nameCreator: "SalvadorDali",
          quantityFavorite: 100,
          price: 4.89,
          tags: "BSC",
        },
        {
          id: 2,
          name: "Triumphant Awakening Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/image-box-10.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-12.jpg",
          nameCreator: "Trista Francis",
          quantityFavorite: 220,
          price: 4.89,
          tags: "BSC",
        },
        {
          id: 3,
          name: "Living Vase 01 by Lanza Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/image-box-11.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-13.jpg",
          nameCreator: "Freddie Carpenter",
          quantityFavorite: 90,
          price: 4.89,
          tags: "BSC",
        },
        {
          id: 4,
          name: "Flame Dress by Balmain Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/image-box-21.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-14.jpg",
          nameCreator: "Tyler Covington",
          quantityFavorite: 145,
          price: 4.89,
          tags: "BSC",
        },
        {
          id: 5,
          name: "Hamlet Contemplates Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/card-item8.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-11.jpg",
          nameCreator: "SalvadorDali",
          quantityFavorite: 100,
          price: 4.89,
          tags: "BSC",
        },
        {
          id: 6,
          name: "Triumphant Awakening Contemplates",
          image:
            "https://themesflat.com/html/axies/assets/images/box-item/image-box-10.jpg",
          avatarCreator:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-12.jpg",
          nameCreator: "Trista Francis",
          quantityFavorite: 220,
          price: 4.89,
          tags: "BSC",
        },
      ],
      dataTopSeller: [
        {
          id: 1,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-1.jpg",
          name: "Crispin Berry",
          price: 214.2,
        },
        {
          id: 2,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-2.jpg",
          name: "Samson Frost",
          price: 205.43,
        },
        {
          id: 3,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-3.jpg",
          name: "Tommy Alvarez",
          price: 170.3,
        },
        {
          id: 4,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-4.jpg",
          name: "Windsor Lane",
          price: 120.7,
        },
        {
          id: 5,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-5.jpg",
          name: "Andy Hurlbutt",
          price: 82.79,
        },
        {
          id: 6,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-6.jpg",
          name: "Blake Banks",
          price: 68.2,
        },
        {
          id: 7,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-7.jpg",
          name: "Monica Lucas",
          price: 52.8,
        },
        {
          id: 8,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-8.jpg",
          name: "Matt Ramos",
          price: 38.4,
        },
        {
          id: 9,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-9.jpg",
          name: "Harper Wilcher",
          price: 29.2,
        },
        {
          id: 10,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-10.jpg",
          name: "Crispin Berry",
          price: 214.2,
        },
        {
          id: 11,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-1.jpg",
          name: "Samson Frost",
          price: 205.43,
        },
        {
          id: 12,
          avatar:
            "https://themesflat.com/html/axies/assets/images/avatar/avt-8.jpg",
          name: "Tommy",
          price: 170.3,
        },
      ],
      settings_carousel_live: {
        dots: true,
        focusOnSelect: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        touchThreshold: 5,
        responsive: [
          {
            breakpoint: 1295,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            },
          },
        ],
      },
      settings_carousel_top_seller: {
        dots: false,
        focusOnSelect: true,
        infinite: true,
        speed: 500,
        slidesToShow: 9,
        slidesToScroll: 9,
        touchThreshold: 5,
        responsive: [
          {
            breakpoint: 1395,
            settings: {
              slidesToShow: 7,
              slidesToScroll: 7,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 1395,
            settings: {
              slidesToShow: 7,
              slidesToScroll: 7,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 1070,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 5,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 760,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false,
            },
          },
        ],
      },
    };
  },
  methods: {
    truncate(text) {
      if (text.length > 20) {
        return text.substring(0, 20) + "...";
      } else {
        return text;
      }
    },
  },
  components: {
    VueSlickCarousel,
  },
};
</script>

<style>
</style>