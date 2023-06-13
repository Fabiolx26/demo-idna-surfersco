<template>
    <div>
        <TheHeader></TheHeader>
        <TheHeroSection></TheHeroSection>
        <TheProductCard></TheProductCard>
        <TheAboutUs></TheAboutUs>
        <TheSocialEmail></TheSocialEmail>
    </div>
</template>

<script>
    import TheHeader from './components/TheHeader.vue';
    import TheHeroSection from './components/TheHeroSection.vue';
    import TheProductCard from './components/TheProductCard.vue';
    import TheAboutUs from './components/TheAboutUs.vue';
    import TheSocialEmail from './components/TheSocialEmail.vue';

    export default{
        components:{
            TheHeader,
            TheHeroSection,
            TheProductCard,
            TheAboutUs,
            TheSocialEmail
        }
    }
</script>