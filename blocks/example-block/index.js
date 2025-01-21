import { registerBlockType } from '@wordpress/blocks';
import './style.css';
import Edit from './edit';

registerBlockType('theme/example-block', {
    edit: Edit,
    save: () => null // Dynamic block; no static save function.
});
