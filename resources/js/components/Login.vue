<template>
  <div>

            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <!-- <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div> -->

            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="#" method="post" >
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" v-model="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" v-model="password"  name="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="register-button mt-0"   @click.prevent="login">Login</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

</div>
</template>

<script>
import axios from 'axios'
export default {
  data(){
    return {
      email: '',
      password: '',
    }
  },
  methods:{
      login() {
        console.log('dfvuhdfuivhidufhviudfhiuhviufdhviufh');
        axios.post('https://elnamat.com/poems/eshop/api/buyers/login',
            {
              email:this.email,
              password:this.password,
              device_token:'1sfvfffs234',
            }
          )
            .then((res) => {
                console.log(res.data.msg);
                localStorage.setItem('usertoken', res.data.token)
                this.email = ''
                this.password = ''
                router.push({name: 'globalhome'})
            })
            .catch((err) => {
                console.log(err)
            })
      },
    }
}
  </script>
