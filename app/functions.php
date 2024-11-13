<?php

function getTableMarkUp($productos, $productosUser = [])
{
    $output = '<table>
    <thead>
        <tr>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Cantidad</td>
        </tr>
    </thead>
    <tbody>';
    foreach ($productos as $key => $value) {
        $output .= '<tr>';

        $output .= '<td>' . $value['nombre'] . '</td>';
        $output .= '<td>' . $value['precio'] . '</td>';
        $output .= '<td>
        <button type="button" onclick="restarCantidad(' . $key . ')"> - </button> 
        <input type="number" id="' . $key . '"name="productosUser[' . $key . ']" value="' . ($productosUser[$key] ?? 0) . '">
        <button type="button" onclick="sumarCantidad(' . $key . ')"> + </button>
        </td>';

        $output .= '</tr>';
    }

    $output .= '</tbody></table>';
    return $output;
}
