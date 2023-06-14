<template>
    <div class="social-email">
        <div class="container">
            <v-card class="social">
                <h1>Instagram</h1>
            </v-card>
            <div class="email-form">
                <form class="form">
                    <v-text-field variant="solo" class="w-70" color="#00b0ff" v-model="firstname" :rules="nameRules" label="First name" required />
                    <v-text-field variant="solo" color="#00b0ff" v-model="lastname" :rules="nameRules" label="Last name" required />
                    <v-text-field variant="solo" color="#00b0ff" v-model="email" :rules="emailRules" label="E-mail" required />
                <!-- <div class="d-flex flex-row">
                        <v-select variant="solo" color="#00b0ff" v-model="birthPlace" :rules="birthPlaceRules" label="BirthPlace" />
                        <v-text-field variant="solo" color="#00b0ff" v-model="birthDate" :rules="birthDateRules" label="BirthDate" required />
                        <v-text-field variant="solo" color="#00b0ff" v-model="phone" :rules="phoneRules" label="Phone" required />
                        <v-text-field variant="solo" color="#00b0ff" v-model="company" :rules="companyRules" label="Company" required />
                    </div> -->
                    <v-textarea variant="solo" color="#00b0ff" label="Your message"></v-textarea>
                    <v-checkbox v-model="agree" color="#00b0ff" class="text-grey" label="Accept privacy policy" />
                    <v-btn type="submit" color="#00b0ff" class="mx-auto text-white fw-bold">Submit</v-btn>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                firstname: '',
                lastname: '',
                email: '',
                birthPlace: '',
                birthDate: '',
                phone: '',
                company: '',
                agree: false,
                valid: false,
                nameRules: [
                    {
                        required: true,
                        message: 'Please enter your first name'
                    }
                ],
                emailRules: [
                    {
                        type: 'email',
                        required: true,
                        message: 'Please enter a valid email address'
                    }
                ],
                birthPlaceRules: [
                    {
                        required: true,
                        message: 'Please select your birth place'
                    }
                ],
                birthDateRules: [
                    {
                        required: true,
                        message: 'Please select your birth date'
                    }
                ],
                phoneRules: [
                    {
                        required: true,
                        message: 'Please enter your phone number'
                    }
                ],
            }
        },
        methods: {
/*             submit(){
                this.valid = true;
            } */
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
            }
        }
        }
</style>