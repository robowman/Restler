<?php
class Simple {
    /**
	 * @class AccessControl(requiredRole=user)
	 */
	protected function user() {
		return 'allow both user & admin';
	}
	/**
     * @class AccessControl(requiredRole=admin)
	 */
	protected function admin(){
		return 'allow only admin';
	}
}

/**
 * @class AccessControl(requiredRole=admin)
 */
class Test{
    /**
     * @class AccessControl(requiredRole=user)
     */
    protected function user() {
        return 'allow both user & admin';
    }
}