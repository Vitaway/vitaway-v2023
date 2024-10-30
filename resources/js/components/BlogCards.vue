<template>
    <div class="w-[330px] bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="h-[200px]">
            <img class="rounded-t-lg w-full h-full" :src="singleBlog.blog_media.graphic" :alt="singleBlog.title" />
        </div>
        <div class="p-3">
            <a :href="'/blogs/'+singleBlog.id">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ singleBlog.title }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 trancate block line-clamp-3 leading-7" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                {{ singleBlog.caption }}
            </p>
            <div class="flex justify-between items-center">
                <a :href="'/blogs/'+singleBlog.slug" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a :href="'/blogs/show/'+singleBlog.id" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Update
                </a>
                <a @click="deleteBlog(singleBlog.id)" class="inline-flex cursor-pointer items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Delete
                </a>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['blog', 'categories'],
        data() {
            return {
                singleBlog: {},
                blog_categories: {},
                editMode: false,
            };
        },
        methods: {
            openEditModal() {
                this.editMode = true;
            },
            async deleteBlog(blogId) {
                await axios.delete(`/api/blogs/${blogId}`);
                window.location.reload();
            }
        },
        watch: {
            blog: {
                handler(newBlog) {
                    this.singleBlog = JSON.parse(newBlog)
                }, immediate: true
            },
            categories: {
                handler(newCategories) {
                    this.blog_categories = JSON.parse(newCategories)
                }, immediate: true
            },
        }
    }
</script>
