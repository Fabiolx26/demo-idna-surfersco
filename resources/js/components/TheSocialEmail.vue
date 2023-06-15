<template>
    <div class="social-email">
        <div class="container">
            <v-card class="social">
                <h1>Instagram</h1>

            </v-card>
            <div class="email-form">
                <form @submit.prevent="validate()" class="form">
                    <v-text-field variant="solo" class="w-70 mb-4" v-model="firstName" label="First name" :rules="[v => !!v || 'First Name is required']" :error-messages="formErrors.firstName"/>
                    <v-text-field variant="solo" class="mb-4" v-model="lastName" label="Last name" :rules="[v => !!v || 'Last Name is required']" :error-messages="formErrors.lastName"/>
                    <v-text-field variant="solo" class="mb-4" v-model="email" label="E-mail" :rules="[v => !!v || 'Email is required']" :error-messages="formErrors.email"/>
                    <div class="grid mb-4">
                        <v-text-field variant="solo" v-model="birthPlace" label="Birth Place" />
                        <v-text-field variant="solo" type="date" v-model="birthDate" label="Birth Date" placeholder="/"/>
                        <v-text-field variant="solo" v-model="phone" label="Phone" />
                        <v-text-field variant="solo" v-model="company" label="Company" />
                    </div>
                    <v-textarea variant="solo" label="Your message" />
                    <v-checkbox v-model="agree" color="#00b0ff" class="text-black" label="Accept privacy policy" />
                    <v-btn type="submit" color="#00b0ff" class="mx-auto text-white fw-bold">Submit</v-btn>
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
                agree: false,
                valid: false,
                formErrors: []
            }
        },
        methods: {
            validate(){
                console.log("banana");

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
                    email: this.email
                })
                .then(response => {
                    console.log(response.data);
                    // Azioni da eseguire in caso di successo
                })
                .catch(error => {
                    console.error(error);
                    // Azioni da eseguire in caso di errore
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

        .container{
            @include flex-row;
            justify-content: center;

            .social{
                width: 480px;
                height: 480px;
                background-color: aqua;
                margin-right: 2em;
            }
            .form{
                @include flex-col;
                width: 480px;

                .grid{
                    display: grid;
                    grid-template-columns: auto auto;
                    column-gap: 1em;  
                }
            }
        }
        }
</style>