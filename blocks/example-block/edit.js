import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <p>{ __( 'Hello from Coulter\'s example block!', 'coulter-fse' ) }</p>
        </div>
    );
}
