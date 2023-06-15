<template>
    <div>
        <TheHeader></TheHeader>
        <TheHeroSection></TheHeroSection>
        <TheProductCard></TheProductCard>
        <TheAboutUs></TheAboutUs>
        <TheSocialEmail></TheSocialEmail>
        <TheFooter></TheFooter>
    </div>
</template>

<script>
    import TheHeader from './components/TheHeader.vue';
    import TheHeroSection from './components/TheHeroSection.vue';
    import TheProductCard from './components/TheProductCard.vue';
    import TheAboutUs from './components/TheAboutUs.vue';
    import TheSocialEmail from './components/TheSocialEmail.vue';
    import TheFooter from './components/TheFooter.vue';

    export default{
        components:{
            TheHeader,
            TheHeroSection,
            TheProductCard,
            TheAboutUs,
            TheSocialEmail,
            TheFooter
        }
    }
</script>