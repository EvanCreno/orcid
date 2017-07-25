<?php
/**
 *
 * Orcid - Authenticate with Orcid.org
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@pontapreta.net>
 * @author Lars Naesbye Christensen, DeIC
 * @copyright 2016-2017
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Orcid;

use OCA\Orcid\AppInfo\Application;
use OCP\AppFramework\Http\TemplateResponse;

$app = new Application();

/** @var TemplateResponse $response */
$response = $app->getContainer()
				->query('SettingsController')
				->personal();

return $response->render();


