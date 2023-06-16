<template>
    <div class="about-us">
        <h1 class="mx-auto">About us</h1>
        <div class="about-us-container">
            <div class="about">
                <img class="surfer" src="../../images/surfer.jpg" alt="surfer" />
                <div class="text">
                    <div class="h2-text">
                        <h2>We are Surfers co.</h2>
                        <v-icon icon="mdi-close" class="mx-auto" />
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <video src="../../video/surfers.webm" class="about-video" autoplay loop muted />
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
    @import '../../sass/mixins';

    @media screen and (min-width: 319px) {
        .about-us{
            @include flex-col;

            h1{
                margin-bottom: -18px;
                font: {
                    family: 'Montserrat';
                    size: 3em;
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
                    @include flex-col;
                    height: 500px;
                    color: #000000;
        
                    .surfer{
                        position: absolute;
                        z-index: -1;
                        width: 100%;
                    }
    
                    .text{
                        background-color: #ffffff;
                        /* width: 80%;*/
                        height: 60%; 
                        margin-top: 8em;
                        text-align: center;
                        
                        .h2-text{
                            @include flex-col;
                            text-align: center;
                            padding: 1em;
                            margin: {
                                left: auto;
                                right: auto;
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
                            right: auto;
                            top: 1em;
                            bottom: 1em;
                        }
                        height: 30%;
                        box-shadow: 0px 0px 13px 0px #000000bf;
                        -webkit-box-shadow: 0px 0px 13px 0px #000000bf;
                        -moz-box-shadow: 0px 0px 13px 0px #000000bf;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 767px) {
        .about-us{
            
            h1{
                margin-bottom: -30px;
                font-size: 5em;
            }
        
            .about-us-container{

                .about{
                    width: 100%;
                    height: 500px;
        
                    .text{
                        height: 60%;
                        margin-top: 15em;
                        padding: 3em;
                    }
                    .about-video{
                        margin-top: 1em;
                        height: 55%;
                        box-shadow: 0px 0px 13px 0px #000000bf;
                        -webkit-box-shadow: 0px 0px 13px 0px #000000bf;
                        -moz-box-shadow: 0px 0px 13px 0px #000000bf;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 1023px) {
        .about-us{
            
            h1{
                margin-bottom: -60px;
                font-size: 10.25em;
            }
        
            .about-us-container{
                margin-bottom: 5em;
        
                .about{
                    @include flex-row;
        
                    .surfer{
                        object-fit: cover;
                    }
        
                    .text{
                        width: 50%;
                        height: 60%;
                        margin-top: auto;
                        padding: 4em;

                        .h2-text{
                            margin: {
                                left: 1em;
                                right: 1em;
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
        }
    }

</style>