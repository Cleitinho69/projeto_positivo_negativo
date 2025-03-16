<template>
    <div id="tela" :style="{backgroundColor: color}">
        {{ mensagem }}
    </div>
</template>

<script>
    export default {
        name: "telaMostrar",
        props: {
            mensagem: String,
            color: String,
        }
    }
</script>

<style scoped>
#tela{
    width: 300px;
    height: 300px;

    background-color: rgb(143, 142, 142);
    border: 2px solid black;
    border-radius: 20px;
    margin: 20px;
    color: white;
    font-size: 20px;

    display: flex;
    align-items: center;
    justify-content: center;
}
</style>