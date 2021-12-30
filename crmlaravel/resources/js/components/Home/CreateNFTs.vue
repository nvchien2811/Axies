<template>
  <div>
    <div class="heading-live-auctions">
      <h2 class="tf-title">Create And Sell Your NFTs</h2>
    </div>
    <section>
        <div v-for="item in dataNFTs" :key="item.id" class="sc-box-icon">
          <div class="image">
            <img :src="item.image" alt="" />
          </div>
          <h3 class="headingg">
            <a href="#">
              {{ item.heading }}
            </a>
          </h3>
          <p class="content">
            {{ item.content }}
          </p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "CreateNFTs",
  data() {
    return {
      dataNFTs: [
        {
          id: 1,
          image: "images/icon/setup.svg",
          heading: "Set Up Your Wallet",
          content:
            "Wallet that is functional for NFT purchasing. You may have a Coinbase account at this point, but very few are actually set up to buy an NFT.",
        },

        {
          id: 2,
          image: "images/icon/create.svg",
          heading: "Create Your Collection",
          content:
            "Setting up your NFT collection and creating NFTs on NFTs is easy! This guide explains how to set up your first collection",
        },

        {
          id: 3,
          image: "images/icon/add.svg",
          heading: "Add Your NFTs",
          content:
            "Sed ut perspiciatis un de omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.",
        },

        {
          id: 4,
          image: "images/icon/list.svg",
          heading: "List Them For Sale",
          content:
            "Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!",
        },
      ],
    };
  },
};
</script>

<style>
</style>