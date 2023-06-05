<template>
    <div class="header">
        <a href="/">
            <h1>Surfers Co.</h1>
        </a>
        <div class="links">
            <a href="/">Boards</a>
            <a href="/">Accessories</a>
            <a href="/">Blog</a>
            <a href="/">Technology</a>
            <a href="/">Team</a>
            <a href="/">Dealers</a>
        </div>
        <div class="social">
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-facebook" />
            </a>
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-instagram" />
            </a>
            <a href="/">
                <v-icon color="grey-darken-3" icon="mdi-email" />
            </a>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    @import "../../sass/mixins.scss";

/*     @media screen and (min-width: 319px) {
        .header{
            text-align: center;

            h1{
                font-size: smaller;
            }
            .links{
                display: none;
            }

            .social{
                display: none;
            }
        }
    } */

    @media screen and (min-width: 768px) {
        .header{
            @include flex-row;
            align-items: center;
            padding: 50px;

            a{
                text-decoration: none;
                &:visited{
                    color: black;
                }
            }

            .links{
                @include flex-row;
                margin: {
                    left: auto;
                    right: auto;
                }

                a{
                    padding: 5px;
                    margin-left: 5px;
                    text-decoration: none;
                    text-transform: uppercase;
                    color: black;
                    font-weight: bold;
                    transition-duration: 0.3ms;

                    &:hover{
                        color: white;
                        background-color: aqua;
                    }
                }
            }

            .social{
                @include flex-row;
                a{
                    padding: 5px;
                }
            }
        }
    }

</style>