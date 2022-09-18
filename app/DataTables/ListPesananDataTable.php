<?php

namespace App\DataTables;

use App\Models\ListPesanan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ListPesananDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return dataTable()
            ->eloquent($query);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ListPesanan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ListPesanan $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('pemesanan')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->parameters([
                'dom'          => 'Bfrtip',
                'buttons'      => ['excel', 'csv'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('fb'),
            Column::make('namaasli'),
            Column::make('alamat'),
            Column::make('wa'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'pesanan_' . date('YmdHis');
    }
}
