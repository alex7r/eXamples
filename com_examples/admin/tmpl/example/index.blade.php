<?php
/** @var Illuminate\Pagination\LengthAwarePaginator $items */
use Joomla\CMS\Pagination\Pagination;

Joomla\CMS\HTML\HTMLHelper::_('behavior.core');
JToolbarHelper::addNew('create');
?>
<form method="get" name="adminForm" id="adminForm" action="<?= Joomla\CMS\Router\Route::_('index.php') ?>">
    <input name="option" value="com_xexamples" type="hidden">
    <input name="task" value="" type="hidden">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    title
                </th>
                <th>
                    body
                </th>
                <th>
                    actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($items->all() as $item)
            <tr>
                <td>
                    {{$item->id}}
                </td>
                <td>
                    {{$item->title}}
                </td>
                <td>
                    {{$item->body}}
                </td>
                <td>
                    <a class="btn btn-small" href="{{\Joomla\CMS\Router\Route::_('index.php?option=com_xexamples&id='
                    .$item->id,false)}}">
                        show
                    </a>
                    <a class="btn btn-small" href="{{\Joomla\CMS\Router\Route::_('index.php?option=com_xexamples&task=edit&id='
                    .$item->id,false)}}">
                        edit
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <?php $jpagination = new Pagination($items->total(),($items->currentPage()-1)*$items->perPage(),
                        $items->perPage()); ?>
                    <?= $jpagination->getListFooter() ?>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</form>