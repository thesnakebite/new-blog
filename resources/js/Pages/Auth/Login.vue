<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
   <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100">
          <div class="content-wrapper full-page-wrapper auth login-2 login-bg">
            <div class="card col-lg-4">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-start mb-3">Login</h3>
                <form @submit.prevent="submit">


                  <div class="form-group">
                    <label>Email *</label>
                    <input class="form-control p_input" 
                           id="email" 
                           type="email" 
                           v-model="form.email"
                           required
                           autofocus
                    >
                    
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" 
                           class="form-control p_input" 
                           id="password" 
                           v-model="form.password" 
                           required 
                           autocomplete="current-password"
                    >
                    
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col me-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>











    <!-- <div>
        <InputLabel for="email" value="Email" />

        <TextInput
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            required
            autofocus
            autocomplete="username"
        />

        <InputError class="mt-2" :message="form.errors.email" />
    </div>

    <div class="mt-4">
        <InputLabel for="password" value="Password" />

        <TextInput
            id="password"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password"
            required
            autocomplete="current-password"
        />

        <InputError class="mt-2" :message="form.errors.password" />
    </div>

    <div class="block mt-4">
        <label class="flex items-center">
            <Checkbox name="remember" v-model:checked="form.remember" />
            <span class="ms-2 text-sm text-gray-600">Remember me</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        <Link
            v-if="canResetPassword"
            :href="route('password.request')"
            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
            Forgot your password?
        </Link>

        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Log in
        </PrimaryButton>
    </div> -->
