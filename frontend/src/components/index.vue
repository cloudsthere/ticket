<template>
<div>
  <div v-on:click="clickMe">
      click me {{msg}}
  </div>
  <el-tabs type="border-card" @tab-click="switchTab" >
    <el-tab-pane @click="clickMe" label="用户管理">用户管理</el-tab-pane>
    <el-tab-pane label="配置管理">配置管理</el-tab-pane>
    <el-tab-pane label="角色管理">角色管理</el-tab-pane>
    <el-tab-pane label="定时任务补偿">定时任务补偿</el-tab-pane>
  </el-tabs>
  
</div>
</template>
<script>
  export default {
    data: function(){
      return {
        msg : 'hello',
      }
    },
    methods: {
      handleRemove(tab) {
        console.log(tab);
      },
      switchTab(tab, event) {
        console.log(tab, event);
      },
      clickMe(){
        console.log('click')
      }
    }
  };
</script>