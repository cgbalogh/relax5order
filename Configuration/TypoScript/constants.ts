
plugin.tx_relax5order_activity {
    view {
        # cat=plugin.tx_relax5order_activity/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:relax5order/Resources/Private/Templates/
        # cat=plugin.tx_relax5order_activity/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:relax5order/Resources/Private/Partials/
        # cat=plugin.tx_relax5order_activity/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:relax5order/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_relax5order_activity//a; type=string; label=Default storage PID
        storagePid =
    }
}
