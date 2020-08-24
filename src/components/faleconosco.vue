<template>
    <section id="contato">
        <p class="alert warning-p">
        
        </p>
        <div class="container">
            <h1>FALE CONOSCO</h1>
        </div>
        <div class="conteudo">
            <div class="image">

            </div>
            <form action="" method="get">
                <div class="input">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" @focus="labelfocus" @blur="labelblur">
                    <div class="error errornome"></div>
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email"  @focus="labelfocus" @blur="labelblur">
                    <div class="error erroremail"></div>
                </div>
                <div class="input">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone"  @focus="labelfocus" @blur="labelblur" v-model="form.telephone" v-mask="'(##)####-####'">
                    <div class="error errortelefone"></div>
                </div>

                <input type="submit" value="ENVIAR" @click="valida">
            </form>
        </div>
    </section>
</template>
<script>
import mixinss from '../mixins/mixins.js'
export default {
    mixins:[mixinss],
    data(){
        return {
            form: {
                telephone: ''
            },
            emailregex:/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
        }
    },
    methods:{
        
        valida(el){
            el.preventDefault()
            let nome = document.querySelector('input[name="nome"]')
            let email = document.querySelector('input[name="email"]')
            let telefone = document.querySelector('input[name="telefone"]')
            let errornome = document.querySelector('.errornome')
            let erroremail = document.querySelector('.erroremail')
            let errortelefone = document.querySelector('.errortelefone')
            // let form = document.querySelector('form')
            // console.log(nome,email,telefone,errornome,erroremail,errortelefone,form)

            let enviardados = true;

            if (nome.value == '') {
                errornome.innerHTML = 'Por favor preencha o campo de nome';
                nome.style.borderBottomColor = 'red';
                enviardados = false;
            } else {
                errornome.innerHTML = '';
                nome.style.borderBottomColor = '#8e99ad';
            }


            if (!this.emailregex.test(email.value)) {
                erroremail.innerHTML = 'Por favor preencha com um email válido';
                email.style.borderBottomColor = 'red';
                enviardados = false;
            } else {
                erroremail.innerHTML = '';
                email.style.borderBottomColor = '#8e99ad';
            }


            if (telefone.value.length != '12' && telefone.value.length != '13') {
                errortelefone.innerHTML = 'Por favor preencha com um número valido (DDD + número)';
                telefone.style.borderBottomColor = 'red';
                enviardados = false;
            } else {
                errortelefone.innerHTML = '';
                telefone.style.borderBottomColor = '#8e99ad';
            }

            if(enviardados==true){
                this.enviaform(nome,email,telefone)
            }else{
                return false;
            }
        },
        enviaform(nome,email,telefone){
            // console.log(nome,email,telefone)
            let warn = document.querySelector('.warning-p')
            mixinss.methods.fadeIn(warn, 0.3, 'block')
            warn.innerHTML = 'Enviando'
            warn.classList.add('alert-primary')
            this.$http.post('email.php',{ nome: nome.value, email: email.value, telefone:telefone.value })
            .then((result) => {
                console.log(result)
                mixinss.methods.fadeOut(warn, 0.3, 'none')
                setTimeout(function(){
                    mixinss.methods.fadeIn(warn, 0.3, 'block')
                    warn.innerHTML = 'Mensagem Enviada'
                },1000)
                setTimeout(function(){
                    mixinss.methods.fadeOut(warn, 0.3, 'none')
                },10000)
            })
            .catch(error => {
                console.log(error)
                mixinss.methods.fadeOut(warn, 0.3, 'none')
                setTimeout(function(){
                    mixinss.methods.fadeIn(warn, 0.3, 'block')
                    warn.innerHTML = 'Erro ao enviar a mensagem'
                },1000)
                setTimeout(function(){
                    mixinss.methods.fadeOut(warn, 0.3, 'none')
                },10000)
            });
            // axios.post('email.php').then(function(response){

            // }).catch(error => console.error(error))
            // axios({
            //     method:post,
            //     url:'email.php',
            //     data: {
            //         nome: nome.value,
            //         email: email.value,
            //         telefone: telefone.value,
            //     }
            // }).then((response) => {
            //     console.log(response);
            //     }, (error) => {
            //     console.log(error);
            //     });

        },

        labelfocus(el){
            el.target.parentNode.childNodes[0].style.transform = 'translate(-40px,-18px) scale(0.7)'
            
        },
        labelblur(el){
            if( el.target.parentNode.childNodes[1].value!=''){
                el.target.parentNode.childNodes[0].style.transform = 'translate(-40px,-18px) scale(0.7)'
            }else{
                el.target.parentNode.childNodes[0].style.transform = 'translate(0,0) scale(1)'
            }
        }
    }
}
</script>
<style lang="scss" scoped>
    @import 'node_modules/bootstrap/scss/bootstrap';
    @import 'node_modules/bootstrap-vue/src/index.scss';
    @import "../../public/variables.scss";
    section{
        .warning-p{
            display: none;
            position: fixed;
            width: 260px;
            bottom: 50px;
            right: 50px;  
            z-index: 50;
        }
        h1{
            font-family: 'Intro';
            font-size: 40px;
            color:$azul-escuro;
            position: relative;
            margin-bottom: 100px;
            &::before{
                display: block;
                content: '';
                position: absolute;
                bottom: -20px;
                left: 0;
                width:50px;
                height: 3px;
                background-color: $azul-escuro;
            }
        }
        .conteudo{
            width: 100%;
            display: flex;
            max-width: 1600px;
            margin:0 auto;
            padding-bottom: 100px;
            .image{
                width: 50%;
                height: 600px;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url('../../public/images/background/agua.png');
            }
            form{
                width: 50%;
                background-color:$azul-marinho;
                padding: 65px;
                padding-top:90px;
                position: relative;
                .input{
                    position: relative;
                    label{
                        position: absolute;
                        top: -10px;
                        left: 0;
                        color:white;
                        font-size:20px;
                        width:250px;
                        transition: 0.3s ease all;
                    }
                    input{
                        width:100%;
                        border:none;
                        border-bottom: 1px solid $input;
                        background-color: transparent;
                        margin-bottom: 100px;
                        color:white;
                    }
                    .error{
                        position: absolute;
                        top: 25px;
                        left: 0;
                        color: red;
                    }
                }
                input[type=submit]{
                    background-color:$azul-claro;
                    color:white;
                    border:none;
                    padding: 10px 20px;
                    border-radius: 2px;
                    transition: 0.3s ease all;
                    position: absolute;
                    right: 65px;
                    bottom: 50px;
                    &:hover{
                        background-color:$azul-escuro;
                    }
                }
            }
        }
    }
    @media(max-width:1500px){
        section{
            .conteudo{
                max-width: 1200px;
            }
        }
    }
    @media(max-width:900px){
        section{
            width: 100%;
            padding-bottom:0;
            .conteudo{
                display: block;
                .image{
                    display: block;
                    width: 80%;
                    margin: 0 auto;
                    // float: left;
                    height: 440px;
                }
                form{
                    width: 70%;
                    margin: 0 auto;
                    margin-top: -150px;
                    
                    input[type=submit]{
                        right: 30px;
                        bottom: 20px;
                    }
                }
            }
        }
    }
    @media(max-width:600px){
        section{
            h1{
                font-size: 36px;
            }
            .conteudo{
                display: block;
                .image{
                    display: block;
                    width: 90%;
                    margin: 0 auto;
                    height: 300px;
                }
                form{
                    width: 80%;
                    margin: 0 auto;
                    margin-top: -150px;
                    padding: 30px;
                    padding-top: 50px;
                    .input{
                        label{
                            font-size:16px;
                        }
                        .error{
                            font-size:16px;
                        }
                    }
                }
            }
        }
    }
</style>
