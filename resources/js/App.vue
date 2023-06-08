<template>
    <div>
        <TheHeader></TheHeader>
        <TheHeroSection></TheHeroSection>
        <TheProductCard></TheProductCard>
    </div>
</template>

<script>
    import TheHeader from './components/TheHeader.vue';
    import TheHeroSection from './components/TheHeroSection.vue';
    import TheProductCard from './components/TheProductCard.vue';

    export default{
        components:{
            TheHeader,
            TheHeroSection,
            TheProductCard,
        }
    }
</script>