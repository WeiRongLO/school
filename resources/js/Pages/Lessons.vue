<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link,
        AuthenticatedLayout,
    },
}
</script>
<template>
    
    <Link title="Lessons" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程列表</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center bg-white border overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="w-3/5 p-3">
                        <button class="border rounded-md  bg-green-500 text-white px-5 py-1" @click="addTeacher()">
                            新增
                        </button>
                        <div class="flex justify-center p-5">
                            <table class="w-full border-collapse text-center">
                                <thead>
                                    <tr>
                                        <th class="border border-black px-2 py-1">序號</th>
                                        <th class="border border-black px-4 py-1">教師姓名</th>
                                        <th class="border border-black px-2 py-1">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-black px-2 py-1">1</td>
                                        <td class="border border-black px-4 py-1">John</td>
                                        <td class="border border-black px-2 py-1">
                                            <button
                                                class="border rounded-md  bg-blue-500 text-white px-5 py-1 mr-2">編輯</button>
                                            <button
                                                class="border rounded-md  bg-red-500 text-white px-5 py-1">刪除</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-black px-2 py-1">2</td>
                                        <td class="border border-black px-4 py-1">Wendy</td>
                                        <td class="border border-black px-2 py-1">
                                            <button
                                                class="border rounded-md bg-blue-500 text-white px-5 py-1 mr-2">編輯</button>
                                            <button
                                                class="border rounded-md bg-red-500 text-white px-5 py-1">刪除</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>