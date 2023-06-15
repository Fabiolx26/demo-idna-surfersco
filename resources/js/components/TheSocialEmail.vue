<template>
    <div class="social-email">
        <div class="container">
            <div class="social">
                <h1>Instagram</h1>
                <v-card>
                    <img src="../../images/collage.png" />
                    <div class="follow-us">
                        <v-icon icon="mdi-instagram" />
                        <h2>Follow us</h2>
                        <a href="#">@surfersco</a>
                    </div>
                </v-card>
            </div>
            <div class="email-form">
                <form @submit.prevent="validate()" class="form">
                    <v-text-field variant="solo" class="w-70 mb-3" v-model="firstName" label="First name" :rules="[v => !!v || 'First Name is required']" :error-messages="formErrors.firstName"/>
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

    .social-email {
        margin-top: 10em;
        align-items: flex-start;

        .container{
            @include flex-row;
            justify-content: center;

            .social{
                width: 480px;
                height: 720px;
                margin-right: 2em;

                h1{
                    font: {
                        family: 'Montserrat';
                        size: 5em;
                        weight: 700;
                    }
                    margin-bottom: -30px;
                    text-transform: uppercase;
                    color: #fafafa;
                    user-select: none;
                }

                img{
                    width: 480px;
                }

                .follow-us{
                    @include flex-row;
                    align-items: center;

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
            .form{
                @include flex-col;
                width: 480px;
                .grid{
                    display: grid;
                    grid-template-columns: 50% 50%;
                    column-gap: 1em;
                }
            }
        }
    }
</style>