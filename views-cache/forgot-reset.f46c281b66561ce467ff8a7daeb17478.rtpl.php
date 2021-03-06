<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area" id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Esqueceu-se da Password?</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-12">
                <form id="login-form-wrap" class="login" method="post" action="/ecommerce/index.php/forgot/reset">
                    <input type="hidden" name="code" value="<?php echo htmlspecialchars( $code, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <h2>Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>, escreva uma nova password:</h2>
                    <p class="form-row form-row-first">
                        <label for="password">Nova password <span class="required">*</span>
                        </label>
                        <input type="password" id="password" name="password" class="input-text" style="width:350px">
                    </p>
                    <div class="clear"></div>
                    <p class="form-row">
                        <input type="submit" value="Enviar" name="login" class="button">
                        
                    </p>

                    <div class="clear"></div>
                </form>                    
            </div>
        </div>
    </div>
</div>