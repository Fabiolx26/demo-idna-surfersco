<template>
    <div class="about-us d-flex flex-column">
        <h1 class="mx-auto">About us</h1>
        <div class="about-us-container">
            <div class="about">
                <img class="surfer" src="../../images/surfer.jpg" alt="surfer" />
                <div class="text">
                    <div class="h2-text p-20">
                        <h2 class="mx-auto">We are Surfers co.</h2>
                        <v-icon icon="mdi-close" class="mx-auto" />
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                        <a class="my-1" href="#">Read more</a>
                    </div>
                </div>
                <video src="../../video/surfers.webm" class="about-video" autoplay loop muted />-->
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
    @import '../../sass/mixins';

    h1{
        margin-bottom: -60px;
        font: {
            family: 'Montserrat';
            size: 10.25em;
            weight: 700;
        }
        text-transform: uppercase;
        color: #fafafa;
        user-select: none;
    }

    .about-us-container{
        @include flex-col;
        margin-bottom: 5em;

        .about{
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 500px;
            color: #000000;

            .surfer{
                position: absolute;
                z-index: -1;
                height: 500px;
            }

            .text{
                background-color: #ffffff;
                width: 50%;
                height: 60%;
                margin-top: auto;
                padding: 4em;

                .h2-text{
                    @include flex-col;
                    margin: {
                        left: 1em;
                        right: 1em;
                    }

                    h2{
                        font-family: 'Montserrat';
                        text-transform: uppercase;
                    }

                    div{
                        font: {
                            family: "Playfair Display", serif;
                            style: italic;
                            size: large
                        }
                    }

                    a{
                        font-family: "Montserrat", sans-serif;
                        text-decoration: none;
                    }
                }
            }
            .about-video{
                display: flex;
                margin: {
                    left: auto;
                    top: 30%;
                }
                height: 55%;
                box-shadow: 0px 0px 13px 0px #000000bf;
                -webkit-box-shadow: 0px 0px 13px 0px #000000bf;
                -moz-box-shadow: 0px 0px 13px 0px #000000bf;
            }
        }
    }
</style>