<table class="table table-striped table-hover table-condensed">
    <thead>
        <tr>
            <th><?php echo h('entity_id'); ?></th>
            <th><?php echo h('firstname'); ?></th>
            <th><?php echo h('lastname'); ?></th>
            <th><?php echo h('city'); ?></th>
            <th><?php echo h('created_at'); ?></th>
            <th><?php echo h('updated_at'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($addresses as $address): ?>
            <tr>
                <td><?php echo h($address['Address']['entity_id']); ?>&nbsp;</td>
                <td><?php echo h($address['Attribute']['firstname']); ?>&nbsp;</td>
                <td><?php echo h($address['Attribute']['lastname']); ?>&nbsp;</td>
                <td><?php echo h($address['Attribute']['city']); ?>&nbsp;</td>
                <td><?php echo h(date_format(date_create($address['Address']['created_at']), 'Y-m-d')); ?>&nbsp;</td>
                <td><?php echo h(date_format(date_create($address['Address']['updated_at']), 'Y-m-d')); ?>&nbsp;</td>
                <td class="actions">
                    <i class="icon-file"></i>
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $address['Address']['entity_id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>