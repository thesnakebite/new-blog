<script setup>
    import SiteLayout from '@/Layouts/SiteLayout.vue';

    const { props } = defineProps({
        posts: Array,
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        }
    })

    const formatDate = (dateString) => {
        const date = new Date(dateString);
        const day = date.getDate();
        const month = date.toLocaleString('es', {month: 'short'});
        return { day, month };
    }
</script>

<template>
    <SiteLayout>
        <Head title="Inicio" />
        <div v-for="post in posts" :key="post.id" class="blog-post padding-bottom-20">
            <div class="blog-item-header">
                <!-- Date -->
                <div class="blog-post-date pull-left">
                    <span class="day">{{ formatDate(post.published_at).day }}</span>
                    <span class="month">{{ formatDate(post.published_at).month }}</span>
                </div>
                <h2 class="">
                    <a href="#">{{ post.title }}</a>
                </h2>
                <div class="clearfix"></div>
                <!-- End Title -->
            </div>
            <!-- End Blog Item Header -->
            <!-- Blog Item Details -->
            <div class="blog-post-details">
                <!-- Author Name -->
                <div class="blog-post-details-item blog-post-details-item-left user-icon">
                    <i class="fa fa-user"></i>
                    <a href="#">Admin</a>
                </div>
                <!-- Tags -->
                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                    <i class="fa fa-tag"></i>
                    <span v-for="(tag, index) in post.tags" :key="tag.id">
                        <a href="#">{{ tag.name }}</a><span v-if="index < post.tags.length - 1">, </span>
                    </span>

                </div>
                <!-- Categoría -->
                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
                    <a href="#">
                        <i class="fa fa-comments"></i>
                        {{ post.category.name }}
                    </a>
                </div>
            </div>
            <!-- End Blog Item Details -->
            <!-- Blog Item Body -->
            <div class="blog">
                <div class="clearfix"></div>
                <div class="blog-post-body row margin-top-15">
                    <div class="col-md-5">
                        <img class="pull-left" src="front/assets/img/blog/image2.jpg" alt="thumb2">
                    </div>
                    <div class="col-md-7">
                        <p class="pb-6">{{ post.excerpt }}</p>
                        <!-- Read More -->
                        <Link :href="route('posts.show',  post.url)" class="btn btn-primary">
                            Leer más <i class="icon-chevron-right readmore-icon"></i>
                        </Link>
                    </div>
                </div>
            </div>
            <!-- End Blog Item Body -->
        </div>
        <!-- Pagination -->
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li class="disabled"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </SiteLayout>
</template>
