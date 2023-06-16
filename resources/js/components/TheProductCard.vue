<template>
    <div class="product-cards">
        <v-card class="card mx-auto">
            <div class="product">
                <img src="../../images/corner.png" class="corner">
                <img src="../../images/board-1.png" class="board-1 mx-auto my-auto">
                <div class="thumbnails my-auto">
                    <img src="../../images/thumb1.png"/>
                    <img src="../../images/thumb2.png"/>
                    <img src="../../images/thumb3.png"/>
                    <img src="../../images/thumb4.png"/>
                </div>
            </div>
            <div class="product-description">
                <div class="product-name">
                    <h2>1 JR Surfboards The Donny Stoker Yellow/Green Rail Fade</h2>
                    <div class="reviews">
                        <v-icon v-for="(star, index) in stars" :key="index"  :icon="starIcon(star)" @mouseover="fillStars(index)" @mouseout="emptyStars()" @click="selectStar(index)"></v-icon>
                        <a href="#">(51)</a>
                    </div>
                </div>
                <div class="description">
                    <ul class="tabs">
                        <li id="main-tab" class="" :class="{ active: activeTab === 'description' }" @click="changeTab('description')">
                            <a class="mx-4" >Description</a>
                        </li>
                        <li class="" :class="{ active: activeTab === 'features' }" @click="changeTab('features')">
                            <a class="mx-4">Features</a>
                        </li>
                        <li class="" :class="{ active: activeTab === 'dimensions' }" @click="changeTab('dimensions')">
                            <a class="mx-4">Dimensions</a>
                        </li>
                    </ul>
                    <Transition mode="out-in">
                        <div v-if="activeTab === 'description'" class="text">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           Vivamus arcu felis bibendum ut tristique et egestas. Odio euismod lacinia at quis risus sed.
                           Pharetra sit amet aliquam id diam maecenas ultricies mi.
                        </div>
                        <div v-else-if="activeTab === 'features'" class="text">
                            Velit laoreet id donec ultrices tincidunt arcu non. Arcu risus quis varius quam quisque id diam.
                            Vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet. Ut aliquam purus sit amet luctus venenatis.
                            Lacus sed viverra tellus in hac habitasse. Ultrices eros in cursus turpis.
                        </div>
                        <div v-else-if="activeTab === 'dimensions'" class="text">
                            Condimentum id venenatis a condimentum vitae sapien pellentesque habitant.
                        </div>
                    </Transition>
                </div>
                <div class="price-buy-button">
                    <div class="price">$499.99</div>
                    <v-btn color="#00d2ff" class="text-white fw-bold">Buy now</v-btn>
                </div>
            </div>
        </v-card>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeTab: 'description',
                selectedStar: -1,
                stars: [false, false, false, false, false]
            }
        },
        methods: {
            changeTab(tab) {
                this.activeTab = tab
            },
            fillStars(index) {
                this.stars = this.stars.map((star, i) => i <= index);
            },
            emptyStars(){
                if(this.selectedStar === -1){
                    this.stars = this.stars.map(() => false);
                }
            },
            selectStar(index) {
                this.selectedStar = index;
            },
            starIcon(star) {
                return star ? 'mdi-star' : 'mdi-star-outline';
            },
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../sass/mixins";
    @import "../../sass/variables";

    @media screen and (min-width: 319px) {
        .product-cards {
            font-family: 'Montserrat', sans-serif;
            margin: {
                top: 50px;
                bottom: 50px;
            }
    
            .card{
                @include flex-col;
                width: 75%;
                
                .product{
                    @include flex-col;
                    .corner{
                        height: 50%;
                        position: absolute;
                        left: 0;
                        z-index: -1;
                    }
    
                    .board-1{
                        height: 300px;
                    }

                    .thumbnails{
                        display: none;
                        img{
                            width: 70px;
                            border: 1px solid #808080;
                            margin: {
                                top: 2px;
                                bottom: 2px;
                            }
    
                            &:hover{
                                border: 2px solid $light-main-color;
                            }
                        }
                    }
                }
    
                .product-description{
                    @include flex-col;
                    margin: 1em;
 
                    .product-name{
                        
                        h2{
                            font-size: smaller;
                        }

                        .reviews{
                            @include flex-row;
                            margin-top: 10px;
                            align-content: center;
    
                            i{
                                color: #ffd119;
                            }
    
                            a{
                                text-decoration: none;
                                color: #808080;
                                margin-left: 10px;
                            }
                        }
                    }
    
                    .description{
                        margin-top: 1em;
    
                        .tabs{
                            @include flex-row;
                            text-transform: uppercase;
                            font: {
                                weight: bold;
                                size: small;
                            }
                            margin-bottom: 10px;
                            border-bottom: 1px solid #dddddd;
                            list-style-type: none;

                            #main-tab{
                                display: block;
                                a{
                                    text-decoration: none;
                                    color: #808080;
                                }
                            }
    
                            li{ display: none; }
    
                            .active {
                                border-bottom: 2px solid $light-main-color;
    
                                a{
                                    color:#000000;
                                    font-weight: bold;
                                }
                            }
                        }
    
                        .text{
                            font-size: x-small;
                            margin-bottom: 2em;
                            color: #808080;
                        }
                    }
    
                    .price-buy-button{
                        @include flex-row;
                        font-weight: 700;
                        align-items: center;
    
                        .price{
                            font-size: small;
                            margin-right: auto;
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 767px){
        .product-cards {
            margin: {
                top: 100px;
                bottom: 100px;
            }
        
            .card{
                @include flex-row;
                width: 80%;
                
                .product{
                    @include flex-row;
                    .corner{
                        height: 100%;
                    }
        
                    .thumbnails{
                        @include flex-col;
                        margin-left: 2em;

                        img{
                            width: 65px;
                            border: 1px solid #808080;
                            margin: {
                                top: 2px;
                                bottom: 2px;
                            }
                        }
                    }
                }
        
                .product-description{

                    .description{

                        .text{
                            margin-top: 1em;
                        }
                    }
        
                    .price-buy-button{
                        .price{
                            font-size: large;
                            margin-right: 25px;
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 1023px){
        .product-cards {

            .card{
                @include flex-row;
                width: 90%;
                
                .product{
                    @include flex-row;
    
                    .board-1{
                        height: 70%;
                    }

                    .thumbnails{
                        margin-left: 0;
                        img{
                            width: 70px;
    
                            &:hover{
                                border: 2px solid $light-main-color;
                            }
                        }
                    }
                }
    
                .product-description{
                    margin: 4em;
                    
                    .product-name{
                        h2{
                            font-size: large;
                        }
    
                        .reviews{
                            @include flex-row;
                            margin-top: 10px;
                            align-content: center;
    
                            i{
                                color: #ffd119;
                            }
    
                            a{
                                text-decoration: none;
                                color: #808080;
                                margin-left: 10px;
                            }
                        }
                    }
    
                    .description{
                        margin-top: 2em;
    
                        .tabs{
    
                            li{
                                display: block;
                                cursor: pointer;
    
                                a{
                                    text-decoration: none;
                                    color: #808080;
                                }
                            }
    
                            .active {
                                border-bottom: 2px solid $light-main-color;
    
                                a{
                                    color:#000000;
                                    font-weight: bold;
                                }
                            }
                        }
    
                        .text{
                            font-size: medium;
                        }
                    }
    
                    .price-buy-button{
                        position: absolute;
                        bottom: 4em;
                        font-weight: 700;
    
                        .price{
                            font-size: larger;
                            margin-right: 30px;
                        }
                    }
                }
            }
        }

    }
        
    
    .v-enter-active,
    .v-leave-active {
    transition: opacity 0.3s ease;
    }

    .v-enter-from,
    .v-leave-to {
    opacity: 0;
    }
</style>