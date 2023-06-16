<template>
    <div class="footer">
        <div class="grid">
            <a href="#">About</a>
            <a href="#">Boards</a>
            <a href="#">Accessories</a>
            <a href="#">Blog</a>
            <a href="#">Technology</a>
            <a href="#">Team</a>
            <a href="#">Dealers</a>
            <a href="#">Contact us</a>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    @import "../../sass/app.scss";

    @media screen and (min-width: 319px)
    {
        .footer{
            display: flex;
            background-color: #2b2b2b;
            color: white;
            margin-top: 5em;
            font: {
                size: large;
                family: 'Montserrat', sans-serif;
            }
            justify-content: center;
            .grid{
                display: grid;
                grid-template-columns: auto auto;
                column-gap: 1em;
                margin: {
                    left: auto;
                    right: auto;
                }
                padding: {
                    top: 2em;
                    bottom: 2em;
                }
                
                a{
                    display: inline-block;
                    text-decoration: none;
                }
            }
    
    /*         .grid > a{
                grid-column: span 1;
            } */
        }
    }
    @media screen and (min-width: 727px)
    {
        .footer{
    
            .grid{
                column-gap: 10em;
            }
        }
    }
</style>