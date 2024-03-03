import "./style.scss";

class Home {
  constructor() {
    this.init();
  }

  init() {
    console.log("Home1");
    // 等待html加载完成后执行
    document.addEventListener("DOMContentLoaded", this.setHtmlAttr);
  }
  
  setHtmlAttr (){
    console.log("Home2");
    // 获取html元素
    const html = document.querySelector('html');
    // 设置属性
    html?.setAttribute('data-theme', 'dark');
  }
}

export default new Home();
