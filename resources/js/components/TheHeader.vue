<template>
    <div class="header">
        <a href="/">
            <h1>Surfers Co.</h1>
        </a>
        <!--<div class="hamburger" @click="show = !show" :class="show ? 'hamburger--is-open' : ''">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>-->
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

<script setup>
    import { ref } from 'vue'

    const show = ref(false);

</script>

<style lang="scss" scoped>
    @import "../../sass/mixins.scss";

    @media screen and (min-width: 319px) {
        .header{
            text-align: center;

            .hamburger {
                display: flex;
                margin-left : auto;
                flex-direction: column;
                justify-content: space-between;
                background-color: transparent;
                border-radius: 50%;
                padding: 10px;
                margin-left: auto;
                margin-right: 20px;
                transition: 0.3s;
            
                .line{
                    display: block;
                    margin: 4px;
                    height: 4px;
                    width:30px;
                    background: var(--light-colour);
                    border-radius: 9px;
                    z-index: 2;
                    transition: transform 300ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 300ms linear;
                }

                &--is-open .line1 {
                    transform: translate(0, 12px) rotate(45deg);
                }

                &--is-open .line2 {
                    opacity: 0;
                }

                &--is-open .line3{
                    transform: translate(0, -12px) rotate(-45deg);
                }
            }
            .links{
                display: none;
            }

            .social{
                display: none;
            }
        }
    }

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
                        background-color: #00b0ff;
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