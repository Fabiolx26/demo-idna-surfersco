<template>
    <div>
        <TheHeader></TheHeader>
        <TheHeroSection></TheHeroSection>
        <TheProductCard></TheProductCard>
        <TheAboutUs></TheAboutUs>
    </div>
</template>

<script>
    import TheHeader from './components/TheHeader.vue';
    import TheHeroSection from './components/TheHeroSection.vue';
    import TheProductCard from './components/TheProductCard.vue';
    import TheAboutUs from './components/TheAboutUs.vue';

    export default{
        components:{
            TheHeader,
            TheHeroSection,
            TheProductCard,
            TheAboutUs
        }
    }
</script>