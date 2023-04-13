<template>
    <div class="wrapper">
        <div class="arrow-up">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100" height="100">
                <polygon points="50,16 85,85 15,85 50,16" fill="none" stroke="black" stroke-width="1.2"/>
            </svg>
        </div>
        <div class="karma-value">1</div>
        <div class="arrow-down">
            same triangle but rotatet upside down:
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100" height="100">
                <polygon points="50,84 85,15 15,15 50,84" fill="none" stroke="black" stroke-width="1.2"/>
            </svg>

        </div>
    </div>
</template>

<script>
export default {
    name: "KarmaWidget"
}
</script>

<style scoped>

</style>
