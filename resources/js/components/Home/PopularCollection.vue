<template>
  <div class="wrapper-content">
    <div class="live-auctions">
      <div class="heading-live-auctions">
        <h2 class="tf-title">Popular Collection</h2>
        <a class="exp style2">EXPLORE MORE</a>
      </div>

      <section>
        <div
          v-for="item in dataCollection"
          :key="item.id"
          class="card-collection"
        >
          <div class="card-bottom">
            <div class="author">
              <div class="box-style">
                <div class="author-avatar">
                  <img :src="item.logo" alt="" class="avatar" />
                  <div class="badge">
                    <i class="fas fa-check"></i>
                  </div>
                </div>
              </div>
              <div class="content">
                <h4>
                  <a href="#">{{ item.name }}</a>
                </h4>
                <div class="infor">
                  <span>Created by</span>
                  <span class="name">
                    <a href="#">{{ item.nameCreater }}</a>
                  </span>
                </div>
              </div>
            </div>
            <button class="heart-button">
              <i class="fas fa-heart"></i>
              <span class="number-like">{{ item.quanlityFavorite }}</span>
            </button>
          </div>
          <a href="#">
            <div class="media-images-collection">
              <div class="box-left">
                <img :src="item.imageLeft" alt="" />
              </div>
              <div class="box-right">
                <div class="top-img">
                  <img :src="item.topImageLeft" alt="" />
                  <img :src="item.topImageRight" alt="" />
                </div>
                <div class="bottom-img">
                  <img :src="item.bottomImage" alt="" />
                </div>
              </div>
            </div>
          </a>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: "PopularCollection",
  data() {
    return {
      dataCollection: [
        {
          id: 1,
          name: "Creative Art Collection",
          logo: "images/avt-1.jpg",
          nameCreater: "Ralph Garraway",
          quanlityFavorite: 100,
          imageLeft: "images/collection-item-2.jpg",
          topImageLeft: "images/collection-item-top-1.jpg",
          topImageRight: "images/collection-item-top-2.jpg",
          bottomImage: "images/collection-item-bottom-4.jpg",
        },

        {
          id: 2,
          name: "Colorful Abstract",
          logo: "images/avt-9.jpg",
          nameCreater: "Mason Woodward",
          quanlityFavorite: 100,
          imageLeft: "images/img-collection23.jpg",
          topImageLeft: "images/img-collection24.jpg",
          topImageRight: "images/img-collection10.jpg",
          bottomImage: "images/img-collection11.jpg",
        },

        {
          id: 3,
          name: "Modern Art Collection",
          logo: "images/avt-10.jpg",
          nameCreater: "Freddie Carpenter",
          quanlityFavorite: 100,
          imageLeft: "images/img-collection12.jpg",
          topImageLeft: "images/img-collection18.jpg",
          topImageRight: "images/img-collection25.jpg",
          bottomImage: "images/img-collection17.jpg",
        },
      ],
    };
  },
};
</script>

<style>
</style>