<template>
    <div class="social-email">
        <div class="my-container">
            <div class="social">
                <h1>Instagram</h1>
                <v-card class="instagram-card">
                    <img src="../../images/collage.png" />
                    <div class="follow-us">
                        <div class="follow-container">
                            <v-icon icon="mdi-instagram" />
                            <h2>Follow us</h2>
                            <a href="#">@surfersco</a>
                        </div>
                    </div>
                </v-card>
            </div>
            <div class="contact-us">
                <v-btn type="button" color="#00b0ff" class="mx-auto w-70 text-white fw-bold">Contact us</v-btn>
            </div>
            <div class="email-form">
                <form @submit.prevent="validate()" class="form">
                    <v-text-field variant="solo" class="mb-3" v-model="firstName" label="First name" :rules="[v => !!v || 'First Name is required']" :error-messages="formErrors.firstName"/>
                    <v-text-field variant="solo" class="mb-3" v-model="lastName" label="Last name" :rules="[v => !!v || 'Last Name is required']" :error-messages="formErrors.lastName"/>
                    <v-text-field variant="solo" class="mb-3" v-model="email" label="E-mail" :rules="[v => !!v || 'Email is required']" :error-messages="formErrors.email"/>
                    <div class="grid mb-4">
                        <v-text-field variant="solo" v-model="birthPlace" label="Birth Place" />
                        <v-text-field variant="solo" type="date" v-model="birthDate" label="Birth Date" placeholder="/"/>
                        <v-text-field variant="solo" v-model="phone" label="Phone" />
                        <v-text-field variant="solo" v-model="company" label="Company" />
                    </div>
                    <v-textarea variant="solo" v-model="message" label="Your message" />
                    <v-checkbox v-model="agree" color="#00b0ff" class="text-black" label="Accept privacy policy" />
                    <v-btn type="submit" color="#00b0ff" class="mx-auto text-white fw-bold" :disabled="!agree">Submit</v-btn>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data(){
            return{
                firstName: '',
                lastName: '',
                email: '',
                birthPlace: '',
                birthDate: '',
                phone: '',
                company: '',
                message: '',
                agree: false,
                formErrors: []
            }
        },
        methods: {
            validate(){
                console.log("banana");
                this.formErrors = [];

                if(!this.firstName){
                    this.formErrors.firstName = "First Name is required";
                }

                if(!this.lastName){
                    this.formErrors.lastName = "Last Name is required";
                }

                if(!this.email){
                    this.formErrors.email = "Email is required";
                }
                
                if (Object.keys(this.formErrors).length > 0) {
                    console.log("ERRORI");
                    return;
                }

                axios.post('api/new-contact', {
                    firstName: this.firstName,
                    lastName: this.lastName,
                    email: this.email,
                    birthPlace: this.birthPlace,
                    birthDate: this.birthDate,
                    phone: this.phone,
                    company: this.company,
                    message: this.message
                })
                .then(response => {
                    console.log(response.data);
                    this.firstName = '';
                    this.lastName = '';
                    this.email = '';
                    this.birthPlace = '';
                    this.birthDate = '';
                    this.phone = '';
                    this.company = '';
                    this.agree = false;
                })
                .catch(error => {
                    console.error(error);
                });
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import '../../sass/mixins';
    @import '../../sass/variables';

    @media screen and (min-width: 319px){
        .social-email {
            @include flex-col;
            margin-top: 5em;  
            
            .my-container{
                @include flex-col;
                margin: {
                    left: auto;
                    right: auto;
                }
                .social{
                    
                    h1{
                        font: {
                            family: 'Montserrat';
                            size: 65px;
                            weight: 700;
                        }
                        margin-bottom: -24px;
                        text-transform: uppercase;
                        color: #fafafa;
                        user-select: none;
                    }
                    .instagram-card{
                        width: 350px;
                        margin-left: auto;
                        margin-right: auto;
                        
                        img{ width: 350px; }
        
                        .follow-us{
    
                            .follow-container{
                                @include flex-row;
                                align-items: center;
                                margin: {
                                    left: auto;
                                    right: auto;
                                }
                                
                                h2,i,a{
                                    margin: 10px;
                                }
    
                                h2,i{
                                    color: $main-color;
                                    font-size:x-large;
                                    user-select: none;
                                }
            
                                h2{
                                    text-transform: uppercase;
                                }
                                
                                a{
                                    text-decoration: none;
            
                                    &:link,&:visited{
                                        color: grey
                                    }
                                }
                            }
                        }
                    }
                }
                
                .contact-us{
                    margin-left:auto;
                    margin-right: auto;
                    padding: 2em;
                    font-size: larger;
    
                }
                .email-form{ display: none; }
            }
        }
    }

    @media screen and (min-width: 767px){
        .social-email {
            margin-top: 20em;
            .social{

                .instagram-card{

                    .follow-us{
                        @include flex-row;
                        align-items: center;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 1023px){
        .social-email {
            margin-top: 15em;
            .my-container{
                flex-direction: row;
                .social{
                    margin-right: 5em;
                    
                    h1{
                        font: {
                            size: 5em;
                            weight: 700;
                        }
                        margin-bottom: -30px;
                        text-transform: uppercase;
                        color: #fafafa;
                        user-select: none;
                    }

                    .instagram-card{
                        width: 480px;


                        img{
                            width: 480px;
                        }
                    }
                }
                .contact-us{ display: none;}
                
                .email-form{
                    display: block;
                    width: 70%;
    
                    .form{
                        @include flex-col;
                        width: 400px;

                        .grid{
                            display: grid;
                            grid-template-columns: 50% 48%;
                            column-gap: 0.5em;
                        }
                    }
                }
            }
        }
    }
</style>