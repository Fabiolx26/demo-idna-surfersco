<template>
    <div class="product-cards">
        <v-card class="card mx-auto">
            <div class="product">
                <img src="../../images/corner.png" class="corner">
                <img src="../../images/board-1.png" class="board-1 mx-auto my-auto">
                <div class="thumbnails d-flex flex-column my-auto">
                    <img src="../../images/thumb1.png"/>
                    <img src="../../images/thumb2.png"/>
                    <img src="../../images/thumb3.png"/>
                    <img src="../../images/thumb4.png"/>
                </div>
            </div>
            <div class="product-description">
                <div class="product-name">
                    <h3>1 JR Surfboards The Donny Stoker Yellow/Green Rail Fade</h3>
                    <div class="reviews">
                        <v-icon icon="mdi-star-outline" v-for="index in 5" :key="index" />
                        <a href="#">(51)</a>
                    </div>
                </div>
                <div class="description">
                    <ul class="tabs">
                        <li class="" :class="{ active: activeTab === 'description' }" @click="changeTab('description')">
                            <a class="mx-4" >Description</a>
                        </li>
                        <li class="" :class="{ active: activeTab === 'features' }" @click="changeTab('features')">
                            <a class="mx-4">Features</a>
                        </li>
                        <li class="" :class="{ active: activeTab === 'dimensions' }" @click="changeTab('dimensions')">
                            <a class="mx-4">Dimensions</a>
                        </li>
                    </ul>
                    <Transition>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </Transition>
                </div>
            </div>
        </v-card>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeTab: 'description'
            }
        },
        methods: {
            changeTab(tab) {
                console.log("CHANGE TAB");
                this.activeTab = tab
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../sass/mixins";

    .product-cards {
        margin: {
            top: 100px;
            bottom: 100px;
        }

        .card{
            @include flex-row;
            width: 75%;
            
            .product{
                @include flex-row;
                .corner{
                    height: 100%;
                    position: absolute;
                    left: 0;
                    z-index: -1;
                }

                .board-1{
                    height: 70%;
                }

                
                .thumbnails{
                    img{
                        width: 70px;
                        border: 1px solid grey;
                        margin: {
                            top: 2px;
                            bottom: 2px;
                        }

                        &:hover{
                            border: 2px solid #00d2ff;
                        }
                    }
                }
            }

            .product-description{
                padding: 2em;
                .product-name{

                    h3{
                        font-family: 'Montserrat', sans-serif;
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
                            color: grey;
                            margin-left: 10px;
                        }
                    }
                }
                .description{
                    margin: {
                        top: 2em;
                    }

                    .tabs{
                        @include flex-row;
                        text-transform: uppercase;
                        font-weight: bold;
                        margin-bottom: 10px;
	                    border-bottom: 1px solid #ddd;
                        list-style-type: none;

                        li{
                            cursor: pointer;
                            margin-bottom: -1px;

                            a{
                                text-decoration: none;
                                color: grey;
                            }
                        }

                        .active {
                            border-bottom: 2px solid #00d2ff;

                            a{
                                color:black;
                                font-weight: bold;
                            }
                        }
                    }
                }
            }

/*             .title{
                position:absolute;
                font: {
                    size: 100%;
                    weight: bolder;
                }
                color: grey;
                z-index: -1;
                right: 0;
                transform: rotate(-90deg);
            } */
        }
    }
</style>