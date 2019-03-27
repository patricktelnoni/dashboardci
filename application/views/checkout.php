<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

    <tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
    </tr>

    <?php $i = 1; $total = 0;?>

    <?php foreach ($this->cart->contents() as $items): ?>
        <?php echo form_hidden($i.'[id]', $items['id']); ?>

        <tr>
            <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
            <td>
                <?php echo $items['name']; ?>

            </td>
            <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
            <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); $total+=$items['subtotal'];?></td>
        </tr>

        <?php $i++; ?>

    <?php endforeach;

    echo "<tr> Total bayar adalah ". $total."</tr>";
    ?>

