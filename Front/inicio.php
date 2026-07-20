<?php foreach ($productos as $p): ?>
<article class="caja">
    <img src="<?= $p->imagen ?>" class="zapato" alt="<?= $p->nombre ?>">

    <div class="descripcion">
        <?= $p->nombre ?> — <?= number_format($p->precio, 2) ?> €
    </div>

    <!-- Botón para carrito -->
    <form action="backend/cart.php?action=add" method="post">
        <input type="hidden" name="id_producto" value="<?= $p->id ?>">
        <button style="width:100%; padding:10px; cursor:pointer;">
            Añadir al carrito
        </button>
    </form>
</article>
<?php endforeach; ?>
