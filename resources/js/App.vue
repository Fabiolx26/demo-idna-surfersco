<template>
    <div>
        <TheHeader></TheHeader>
        <TheHeroSection></TheHeroSection>
    </div>
</template>

<script>
    import TheHeader from './components/TheHeader.vue';
    import TheHeroSection from './components/TheHeroSection.vue';

    export default{
        components:{
            TheHeader,
            TheHeroSection,
        }
    }
</script>

<style lang="scss" scoped>

</style>