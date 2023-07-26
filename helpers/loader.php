<style>
    *,*:after,*:before{
        margin:0;
        padding:0;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
    }
    .container-loader{
        background: rgba(10,10,10,0.9);
        height:100%;
        width:100%;
        position:fixed;
        z-index:10000;
        -webkit-transition:all 1s ease;
        -o-transition:all 1s ease;
        transition: all 1s ease;
    }
    .set-loader{
        position: absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:auto;
    }

</style>

<div class="text-center container-loader" id="loader-main">
  <div class="spinner-border set-loader text-warning" style="width: 3rem; height: 3rem;"  role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
