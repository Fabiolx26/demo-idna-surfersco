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
                    <h3>Board 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="title">
            </div>
        </v-card>
    </div>
</template>

<script>

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

                        &:hover{
                            border: 2px solid aqua;
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